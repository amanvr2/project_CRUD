<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Test;

class UploadController extends Controller
{
    public function store(request $request){


        $path=$request->file('image')->store('upload');
        echo $path;
    }
}
