<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    //
    public function getPdf(Request $request){
        $type = $request->type;
        $id   = $request->id;
        $companyId = $request->companyId;
        if( $type == 'sds' )
        {
            $url = 'website-files/'.$companyId.'/products/documents/sds/SDS-'.$id.'.pdf';
            return response()->file( public_path( $url ) );
        } else {
            return response()->json(['error' =>0, 'pdf' => null]);
        }
    }
}
