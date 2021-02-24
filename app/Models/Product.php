<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

Class Product extends Model
{
    protected $table = "products";
    protected $guarded = [""];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}