<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::post('/ueditorUpload','Upload\UeditorUploadController@index');
Route::post('/ckeditorupload','Upload\CkeditorUploadController@upload');

Route::group(['middleware'=>'csrf'],function(){

	Route::get("search","IndexController@search");

	Route::post('/uploadImg','Upload\ImgController@upload');
	Route::post('/uploadFile','Upload\ImgController@uploadFile');

	Route::get('/', 'IndexController@index');
	Route::get('/blackarc20', 'IndexController@blackarc20');
	Route::get('/blackarc360', 'IndexController@blackarc360');
	Route::get('/think', 'IndexController@think');
	Route::get('/service/1', 'IndexController@service1');
	Route::get('/service/2', 'IndexController@service2');
	Route::get('/service/3', 'IndexController@service3');
	Route::get('/service/4', 'IndexController@service4');
	Route::get('/service/5', 'IndexController@service5');
	Route::get('/service/6', 'IndexController@service6');
	Route::get('/service/7', 'IndexController@service7');
	Route::get('/service/8', 'IndexController@service8');
	Route::get('/service/9', 'IndexController@service9');
	// Route::get('/culture/1', 'IndexController@culture1');
	Route::get('/literature', 'IndexController@literature');
	Route::get('/music', 'IndexController@music');
	Route::get('/culture', 'IndexController@culture');
	Route::get('/culture/3', 'IndexController@culture3');
	Route::get('/culture/2', 'IndexController@culture2');
	Route::get('/culture/4', 'IndexController@culture4');
	Route::get('/culture/5', 'IndexController@culture5');
	Route::get('/show/0', 'IndexController@show0');
	Route::get('/show/1', 'IndexController@show1');
	Route::get('/show/2', 'IndexController@show2');
	Route::get('/show/3', 'IndexController@show3');
	Route::get('/show/4', 'IndexController@show4');
	Route::get('/show/5', 'IndexController@show5');
	Route::get('/show/6', 'IndexController@show6');
	Route::get('/show/7', 'IndexController@show7');
	Route::get('/show/8', 'IndexController@show8');
	Route::get('/show/9', 'IndexController@show9');
	Route::get('/show/10', 'IndexController@show10');
	Route::get('/show/11', 'IndexController@show11');
	Route::get('/show/12', 'IndexController@show12');
	Route::get('/show/13', 'IndexController@show13');
	Route::get('/show/14', 'IndexController@show14');
	Route::get('/show/15', 'IndexController@show15');
	Route::get('/show/16', 'IndexController@show16');
	Route::get('/show/17', 'IndexController@show17');
	Route::get('/show/18', 'IndexController@show18');
	Route::get('/show/19', 'IndexController@show19');
	Route::get('/show/20', 'IndexController@show20');
	Route::get('/show/21', 'IndexController@show21');
	Route::get('/show/22', 'IndexController@show22');
	Route::get('/show/23', 'IndexController@show23');
	Route::get('/show/24', 'IndexController@show24');
	Route::get('/show/25', 'IndexController@show25');
	Route::get('/show/26', 'IndexController@show26');
	Route::get('/show/27', 'IndexController@show27');
	Route::get('/show/28', 'IndexController@show28');
	Route::get('/show/29', 'IndexController@show29');
	Route::get('/show/30', 'IndexController@show30');
	Route::get('/show/31', 'IndexController@show31');
	Route::get('/show/32', 'IndexController@show32');
	Route::get('/show/33', 'IndexController@show33');
	Route::get('/show/34', 'IndexController@show34');
	Route::get('/show/35', 'IndexController@show35');
	Route::get('/show/36', 'IndexController@show36');
	Route::get('/show/37', 'IndexController@show37');
	Route::get('/show/38', 'IndexController@show38');
	Route::get('/show/39', 'IndexController@show39');
	Route::get('/show/40', 'IndexController@show40');
	Route::get('/show/41', 'IndexController@show41');
	Route::get('/show/42', 'IndexController@show42');
	Route::get('/show/43', 'IndexController@show43');
	Route::get('/show/44', 'IndexController@show44');
	Route::get('/show/45', 'IndexController@show45');
	Route::get('/show/46', 'IndexController@show46');
	Route::get('/show/47', 'IndexController@show47');
	Route::get('/inner/1', 'IndexController@inner1');
	Route::get('/inner/2', 'IndexController@inner2');
	Route::get('/inner/3', 'IndexController@inner3');
	Route::get('/inner/4', 'IndexController@inner4');
	Route::get('/inner/5', 'IndexController@inner5');
	Route::get('/inner/6', 'IndexController@inner6');
	Route::get('/invite/0', 'IndexController@invite0');
	Route::get('/invite/1', 'IndexController@invite1');
	Route::get('/invite/2', 'IndexController@invite2');
	Route::get('/invite/3', 'IndexController@invite3');
	Route::get('/invite/4', 'IndexController@invite4');
	Route::get('/invite/5', 'IndexController@invite5');
	Route::get('/invite/6', 'IndexController@invite6');
	Route::get('/invite/8', 'IndexController@invite8');
	Route::get('/invite/9', 'IndexController@invite9');
	Route::get('/invite/10', 'IndexController@invite10');
	Route::get('/invite/11', 'IndexController@invite11');
	Route::get('/invite/12', 'IndexController@invite12');
	Route::get('/contact/0', 'IndexController@contact0');
	Route::get('/contact/1', 'IndexController@contact1');
	Route::get('/contact/2', 'IndexController@contact2');
	Route::get('/contact/3', 'IndexController@contact3');

});

Route::controllers([
	'auth' => 'Auth\AuthController',
]);

