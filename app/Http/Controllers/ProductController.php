<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteProduct;
use App\WebsiteProductCategory;
use DB;
use App\WsFormData;
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

    public function formulary(Request $request){
        $data  = $this->getProductData();
        return view('pages.Formulary.index',[
            'data' => $data,
            'category' => null
        ]);
    }

    public function requestProducts(Request $request)
    {
        date_default_timezone_set("America/New_York");
        if(isset($request['g-recaptcha-response']) && !empty($request['g-recaptcha-response'])) {
            $secret = '6LeGWp8aAAAAAM105C86-P8NGSbmvS5Lh0LnTvHZ';

            if( ini_get('allow_url_fopen') ) {
                //reCAPTCHA - Using file_get_contents()
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$request['g-recaptcha-response']);
                $responseData = json_decode($verifyResponse);
            } else if( function_exists('curl_version') ) {
                // reCAPTCHA - Using CURL
                $fields = array(
                    'secret'    =>  $secret,
                    'response'  =>  $_POST['g-recaptcha-response'],
                    'remoteip'  =>  $_SERVER['REMOTE_ADDR']
                );

                $verifyResponse = curl_init("https://www.google.com/recaptcha/api/siteverify");
                curl_setopt($verifyResponse, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($verifyResponse, CURLOPT_TIMEOUT, 15);
                curl_setopt($verifyResponse, CURLOPT_POSTFIELDS, http_build_query($fields));
                $responseData = json_decode(curl_exec($verifyResponse));
                curl_close($verifyResponse);
            } else {
                return response()->json(['response'=>'error','errorMessage'=>'You need CURL or file_get_contents() activated in your server. Please contact your host to activate.']);
            }
            if($responseData->success) {
                $ts1 = time();
                $Sname = $request['swName'];
                $Semail = $request['swEmail'];
                $Sphone = $request['swPhone'];
                $Scompany = $request['swCompany'];
                $Smessage = $request['swMsg'];
                $Sproduct = $request['swProduct'];
                $Sip = $request['swIp'];
                $Slink = $request['swLink'];
                $Scountry = $request['swCountry'];
                $Sstate = $request['swState'];
                $debug = 0;
                $added_timestamp = '' . date("Y-m-d h:i a");
                $elogo = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANwAAABJCAYAAABW8UhxAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF8WlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDggNzkuMTY0MDM2LCAyMDE5LzA4LzEzLTAxOjA2OjU3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjEuMSAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIwLTAzLTI2VDIyOjA1OjIxLTA0OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMC0wNC0yOVQwMzozNjozMi0wNDowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0wNC0yOVQwMzozNjozMi0wNDowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDplYmEwYjQ3NS0xMWM3LWM1NDktODk3OC05ZjNiZjIzNDg4YzkiIHhtcE1NOkRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDo4NmQwNDI1Ni1lNTNhLTVhNGEtYmM2Yy1hMTBlZWViNzUzOTQiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo5Njk4OGI4Ni1mOTM0LTg5NDgtYmYzZi0zM2U5YTYwMTUzOGQiPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjcmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjk2OTg4Yjg2LWY5MzQtODk0OC1iZjNmLTMzZTlhNjAxNTM4ZCIgc3RFdnQ6d2hlbj0iMjAyMC0wMy0yNlQyMjowNToyMS0wNDowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIDIxLjEgKFdpbmRvd3MpIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDplYmEwYjQ3NS0xMWM3LWM1NDktODk3OC05ZjNiZjIzNDg4YzkiIHN0RXZ0OndoZW49IjIwMjAtMDQtMjlUMDM6MzY6MzItMDQ6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMS4xIChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7Lok1XAAA7SklEQVR4nO2dd3gexbX/P7O7775dvViSbbnJvWIwzdj0XpNAAuTecNNuSHJTbm4Kv7Sb5JKEkISEkOTCTUiDQEgogdAD2DQbG1cwLrItW3JTl169ddv8/ph9kSxLsmRsTIi/z7PPvu/O7OzZ2Tlnzpw5c0Zw+8UcwzG8YyE9SHVy+7nX8/GZl9CTTRHQo5hGHE3owymhFpgBLABmAuOACqCoT54E0ArsBDYAK/1z/VAFe9Ih5/TguGkcN43tpXCcFB4eAjHgPcZwKD6GY/gHQx1w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';
                $ecomp = 'Jeen International Corporation';
                WsFormData::create([
                    'form_url' => $Slink,
                    'form_type' => 'product_information',
                    'product_name' => $Sproduct,
                    'user_ip'      => $Sip,
                    'contact_name' => $Sname,
                    'contact_company' => $Scompany,
                    'contact_phone'   => $Sphone,
                    'contact_email'   => $Semail,
                    'contact_reason'  => 'Request Information',
                    'contact_country' => $Scountry,
                    'contact_state'   => $Sstate,
                    'message'         => $Smessage,
                    'browserData'     => '',
                    'active'          => 1,
                    'sync_date'       => ''
                ]);
                return response()->json(['data'=>$request]);
            } else {
                return response()->json(['response'=>'error','errorMessage'=>'Robot verification failed, please try again']);
            }
        } else {
            return response()->json(['response'=>'error','errorMessage'=>'Please click on the reCAPTCHA box.']);
        }
    }
}
