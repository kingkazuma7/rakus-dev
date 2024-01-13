<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    // fillableに指定したプロパティは入力可能になる
    //  $fillableプロパティは、一括割り当てを許可するすべての属性をリストする配列
    protected $fillable = [
        'title',
        'content',
    ];
}
