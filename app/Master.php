<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    //
    protected $fillable = ['prefecture_cd', 'prefecture_name', 'insert_date', 'insert_cd', 'update_date', 'update_cd', 'delete_date', 'delete_cd', 'delete_flg' ];
}
