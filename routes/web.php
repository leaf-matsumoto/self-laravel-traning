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

Route::get('/', function () {
    return view('welcome');
});

// bladeテスト用ルーティング

// Route::get('/blade-01', 'App\Http\Controllers\BladeTestController@blade_01');

// 変数受け渡し
Route::get('/blade-01', function () {
    return view('blade_01', ['name' => 'test-01']);
});

// エスケープ処理
Route::get('/blade-02', function () {
    return view('blade_02', ['script' => '<script>alert("エスケープ処理がされていません。");</script>']);
});

// Javascript使用
Route::get('/blade-03', function () {
    return view('blade_03', ['script' => '<script>alert("JavaScriptのアラート");</script>']);
});

// Jsonのレンダー ✖
Route::get('/blade-04', function () {
    return view('blade_04', ['array' => $array]);
});

// Bladeディレクティブ
Route::get('/blade-05', function () {

    // 連想配列($array)
    $array = array
    (
        "name" => "名前" ,
        "age" => "年齢" ,
    );

    return view('blade_05', ['array' => $array]);
});

// サブビューの読み込み
Route::get('/blade-06', function () {
    return view('blade_06');
});
