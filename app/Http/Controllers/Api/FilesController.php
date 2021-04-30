<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    //
    public function show(){
        return response()->download(storage_path('app\ASSN_home.pdf'),'Download Home Page');
    }
    public function create(Request $request){
        $path = $request->file('photo')->store('testing');
        return response()->json(['path'=>$path], 200);
    }
}
