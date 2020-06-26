<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller11 extends Controller
{
    //Thuc hien post file len
    public function postFile(Request $request){
        if($request->hasFile('myFile')){
            $file=$request->file('myFile');
            $file->move('img','myFile.jpg');
        }
        else {
            echo "chua co file";
        }
    }

}
