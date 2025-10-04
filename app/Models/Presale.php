<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presale extends Model
{
    protected $table = "presales";
    protected $fillable = ['name','email','phone','product','product_name','amount'];
}
