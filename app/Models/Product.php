<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function merk(){
        return $this->belongsTo(Merk::class, 'merk_id', 'id');
    }
}
