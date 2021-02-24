<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

Class Category extends Model
{
    protected $table = "categories";
    protected $guarded = [""];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}