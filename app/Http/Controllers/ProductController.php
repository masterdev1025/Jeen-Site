<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteProduct;
use App\WebsiteProductCategory;
use DB;
class ProductController extends Controller
{
    //
    private function getProductData($category = 'all'){
        $prodCategory = null;
        $prodData = WebsiteProduct::where([['active','=',1],['companyId','=',1]]);
        $prodDataQuery = 'SELECT *
                          FROM `website_products`
                          WHERE `active` = 1
                          AND `companyId` = 1
                          ';
        if( $category !== 'all' )
        {
            $prodCategory = WebsiteProductCategory::where([['active','=',1],['category_url_alias','=',$category]])->first();
            if( $prodCategory )
            {
                $prodDataQuery = $prodDataQuery . 'AND ' . $prodCategory->sql_param;
                $data = DB::select( $prodDataQuery );
            } else {
                $data = array();
            }
        } else {
            $data = DB::select( $prodDataQuery );
        }

        return ['products' => $data, 'category' => $prodCategory ? $prodCategory : null ];
    }
    public function index(){
        $data  = $this->getProductData();
        return view('pages.Products.main.index',[
            'data' => $data,
            'category' => null
        ]);
    }

    public function indexByCategory($category, Request $request){
        $data  = $this->getProductData($category);
        return view('pages.Products.main.index',[
            'data' => $data,
            'category' => $category
        ]);
    }

    public function indexByCategoryAlias($category, $alias, Request $request)
    {
        $data    = $this->getProductData($category);
        $product = null;
        if($data && $data['products'])
        {
            foreach($data['products'] as $d)
            {
                if( $d->url_alias == $alias )
                {
                    $product = $d;
                    break;
                }
            }
        }
        return view('pages.Products.detail.index', [
            'product' => $product
        ]);
    }
}
