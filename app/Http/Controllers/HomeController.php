<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('pages.Home.index');
    }

    public function aboutUs(){
        return view('pages.About.index');
    }
    public function formulary(){
        return view('pages.404');
    }
    public function brochures(){
        $brochureArray = array(
            array(
                'urlText' => 'Jeen International 2021 Catalog (USA Edition)',
                'url' => 'https://www.jeen.com/product-files/JEEN-INTL-2021-CATALOG-0421.pdf',
                'linkAfter' => '',
            ),
            array(
                'urlText' => 'Jeecide CAP-7 Brochure',
                'url' => 'https://www.jeen.com/product-files/Jeecide-CAP-7-Brochure.pdf',
                'linkAfter' => '',
            ),
            array(
                'urlText' => 'Jeesperse® NDA  Sun Dispersions Brochure',
                'url' => 'https://www.jeen.com/product-files/Jeesperse-NDA-Sun-Dispersions-Brochure.pdf',
                'linkAfter' => '',
            ),
            array(
                'urlText' => 'OleoSil™ Brochure',
                'url' => 'https://www.jeen.com/product-files/OleoSil-Brochure.pdf',
                'linkAfter' => '',
            ),

        );
        return view('pages.Brochures.index',[
            'brochureArray' => $brochureArray
        ]);
    }

    public function contact(){
        return view('pages.ContactUs.index');
    }
}
