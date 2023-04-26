<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sample extends Model
{
    //モデルと関連しているテーブルの設定
    protected $table = 'samples';
    //編集可能なテーブルの設定
    protected $fillable = [
        'name',
        'email',
        'comment',
    ];
}
