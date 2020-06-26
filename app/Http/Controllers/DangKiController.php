<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input,File;

use  App\Http\Requests;
// use Input, File;
//  use Request;
use App\Http\Requests\DangKiRequest;

class DangKiController extends Controller
{
    //
    public function funDangKi(DangKiRequest $Request){
        //user la mang de luu tru cac doi tuong
        $user=[
            'name'=>$name =$Request-> input("name"),
            'phone'=> $phone = $Request->input('phone'),
            'age'=>$age = $Request-> input("age"),
            'mail'=>$mail = $Request-> input("mail"),
            'web'=>$web = $Request-> input("web"),
            'adress'=>$dc = $Request->input('address'),

        ];
        return view('DangKi')->with(['user',$user]);
    }
}
