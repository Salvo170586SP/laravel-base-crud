<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //

    protected $fillable = [
        'title','description','thumb','series','price','sale_date','type'
    ];
}
