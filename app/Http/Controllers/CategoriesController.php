<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        return response()->json(Category::all());
    }

    public function store(Request $request)
    {
        return Category::create($request->all());
    }
    
    public function show($id)
    {
        return Category::find($id);
    }
    
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        return $category->update($request->all());
        
    }
    
    public function delete($id)
    {
        Category::findOrFail($id)->delete();
        return 'Deleted';
    }
}