<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $guarded = [];

    public function produk(){
        return $this->hasMany(Product::class,'merk_id','id');
    }

}
