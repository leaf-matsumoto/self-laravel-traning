<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeTestController extends Controller
{
    //変数受け渡し
    public function blade_01()
    {
        return view('blade_01');
    }

    //エスケープ処理
    public function blade_02()
    {
        return view('blade_02');
    }

    // Javascript使用
    public function blade_03()
    {
        return view('blade_03');
    }

}
