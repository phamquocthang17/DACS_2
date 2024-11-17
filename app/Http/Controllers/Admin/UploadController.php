<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\services\UploadServices;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    protected $upload;
    public function __construct(UploadServices $upload){
        $this->upload=$upload;

    }
    public function store(Request $request){
        $url=$this->upload->store($request);
        $url = $this->upload->store($request);
        if ($url !== false) {
            return response()->json([
                'error' => false,
                'url' => $url
            ]);
        }
        
        return response()->json([
            'error' => true
        ]);


        

    }
    
}
