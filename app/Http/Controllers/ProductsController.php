<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index()
    {
        return response()->json(Product::all());
    }

    public function store(Request $request)
    {
        return Product::create($request->all());
    }
    
    public function show($id)
    {
        return Product::find($id);
    }
    
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        return $product->update($request->all());
        
    }
    
    public function delete($id)
    {
        Product::findOrFail($id)->delete();
        return 'Deleted';
    }

    public function testing()
    {
        //$category = Category::find(6);
        //return $category->products;

        //$product = Product::find(4);
        //return $product->category;
    }
}