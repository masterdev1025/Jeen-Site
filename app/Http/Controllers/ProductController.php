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

            }
        }
    }
    public function index(){
        return view('pages.Products.main.index');
    }
}
