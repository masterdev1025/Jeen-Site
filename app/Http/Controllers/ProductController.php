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
        $prodDataQuery = 'SELECT `wp`.`product_name` AS `productName`,
                                 `wp`.`product_inci` AS `productInci`,
                                 `wp`.`product_type` AS `productType`,
                                 `wp`.`product_state` AS `productState`,
                                 `wp`.`pdfSds`,
                                 `wp`.`pdfSpecs`,
                                 `wp`.`pdfTds`,
                                 `product_id`,
                                 `wp`.`image_url` AS `img`,
                                 `wp`.`url_alias` AS `urlAlias`,
                                 `wp`.`primary_category_id` AS `categoryId`,
                                 `wc`.`category_url_alias` AS `categoryAlias`
                         FROM `website_products` `wp`
                         LEFT OUTER JOIN `website_products_categories` `wc`
                         ON `wc`.id = `wp`.`primary_category_id`
                         WHERE `wp`.`active` = 1
                         AND `wp`.`companyId` = 1
                          ';
        if( $category !== 'all' )
        {
            $prodCategory = WebsiteProductCategory::where([['active','=',1],['category_url_alias','=',$category]])->first();
            if( $prodCategory )
            {
                $prodDataQuery = $prodDataQuery . 'AND `wp`.' . $prodCategory->sql_param;
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

    public function authIndex(){
        $data  = $this->getProductData();
        return view('pages.Products.underAuth.main.index',[
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
                if( $d->urlAlias == $alias )
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
