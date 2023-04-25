<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

class SampleController extends Controller
{
    //テーブルのデータ表示
    public function index () {
        $samples = Sample::all();
        return view('list',compact('samples'));
    }
}
