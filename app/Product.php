<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','productCat','occasionCat','price','discount','total_price','picture'];
}