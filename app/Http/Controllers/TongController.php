<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\http\Requests;
use App\Http\Requests\sumABRequest;

class TongController extends Controller
{
    function tinhtong($a,$b){
    	return $a+$b;
    }
    function funTinh(sumABRequest $request){
    	$a =$request->input ("soa");
    	$b =$request->input ("sob");
        $result =$a+$b;
    	echo $result;

    }

    function index(){
        return view('TinhTong');
    }

    function index1(){
        $title=" Day la tieu de";
        $description="Day la dong mieu ta";
        $copyright="Hoc web chuan";
        return view('test')->with (['title'=>$title,'description'=>$description,'copyright'=>$copyright]);

    }

    function funTieude(Request $request){
    	$title =$request->input ("tieude");
        $description =$request->input ("mota");
        $copyright=$request->input("copyr");

     echo  $title.'<br>';
     echo $description.'<br>' ;
      echo  $copyright.'<br>' ;
    

    }

    function index2(){
        return view('vd');
    }
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


