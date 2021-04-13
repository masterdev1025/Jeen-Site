<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    private function getProductData($category = 'all'){
        $prodData = file_get_contents('https://jeeninv.com/websitedata/product_data.php?companyId=1&t='.time());
        $data = json_decode($prodData);
        if( $data && $data->products )
        {
            if( $category !== 'all' ){
                foreach($data->products as $key => $prod)
                {
                    if( strpos($prod->productCategory, $category) === false )
                    {
                        unset( $data->products[$key] );
                    }
                }
            }
        }
        return $data;
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
}
