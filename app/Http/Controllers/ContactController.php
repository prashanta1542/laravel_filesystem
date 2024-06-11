<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function upload(Request $req){

        // echo"<pre>";
        // print_r($req->all());
        $filename=time()."-myapp.".$req->file('image')->getClientOriginalExtension();
        $path=$req->file('image')->storeAs('public/uploads',$filename);

       dd();
    }
}
