<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('xinchao');
// });

Route::get('/', function(){
	return view('welcome');
});
Route::get('Khoahoc', function(){
	return 'xinchao';
});

Route::get('Hoten/{ten}',function($ten){  //chay Hoten/Tencuaminh
	echo "<h1> Xin chao ban:</h1>".$ten;
});

Route::get('Route1',['as'=>'My route', function(){ // Route1: Khai bao tu khoa.go tren google run la Route1
	echo 'Xin chao cac ban A';
}]);

Route::group (['prefix'=>'MyGroup'], function(){  //go tren trinh duyet http://localhost/Laravel/project/MyGroup/User1
	Route::get('User1',function(){
		echo 'User1';
	});

	Route::get('User2',function(){
		echo 'User2';
	});

	Route::get('User3',function(){
		echo 'User3';
	});

});

Route::get('Controller','XinChaoController@showDisplay');

Route::get('Controller/{a}/{b}','TongController@tinhtong');

Route::get('tong','TongController@index');
Route::post('tong','TongController@funTinh');

Route::get('object','TongController@index1');

Route::post('tieude','TongController@funTieude');
Route::get('tieude','TongController@index2');


Route::post('dientich','DienTichController@funcDientich');
Route::get('dientich','DienTichController@index3');
// Thuc hien goi file view form do len


//Route::post('postFile','controller11@postFile');



Route::get('uploadFile',function(){
	return view('postFile');
});
Route::post('postFile', 'controller11@postFile');

//
Route::get('DangKi', function () {
    return view('DangKi');
});

Route::get('DangKi', function(){
	return view('DangKi');
});
Route::post('DangKi','DangKiController@funDangKi');

?>


