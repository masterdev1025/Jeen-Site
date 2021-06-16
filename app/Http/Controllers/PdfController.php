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
            $b64Doc = chunk_split(base64_encode(file_get_contents(public_path( $url ))));
            return response()->json(['error'=>0, 'pdf'=>$b64Doc]);
        } else {
            return response()->json(['error' =>0, 'pdf' => null]);
        }
    }
}
