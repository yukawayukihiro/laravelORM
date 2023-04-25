<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sample extends Model
{
    //モデルと関連しているテーブルの設定
    protected $table = 'sample';
    //テーブルの主キーの設定
    protected $primarykey = 'user_id';
    //IDが自動増分されるかを設定
    public $incrementing = false;
    //モデルのタイムスタンプを更新するかの指示を設定
    public $timestamps = false;
    //代入しない属性を設定
    protected $guarded = ['id'];   
}
