<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DienTichController extends Controller
{
    function funcDientich(Request $request){
    if( $request->input('type')=="tamgiac" ){
        $canha=$request->input('canha');
        $canhb=$request->input('canhb');
        $s= 1/2*($canha*$canha);
      
        echo $s;
        }
        else {
            $canha=$request->input('canha');
            $canhb=$request->input('canhb');
            $s= $canha*$canhb;
            echo $s;
        }
    }
       
    function index3(){
        return view('DienTichTamGiacVaTuGiac');
    }
}
