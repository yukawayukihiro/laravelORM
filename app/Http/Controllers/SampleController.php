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
    //テーブルにデータを追加
    public function create (Request $request) {
        Sample::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);
        return redirect('/list');
    }
}
