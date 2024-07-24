<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('Category.index', compact('categories'));
    }

    public function create()
    {
        return view('Category.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();

        return redirect()->route('Category.index');
    }

    public function show(Category $category)
    {
        return view('Category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('Category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();

        return redirect()->route('Category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('Category.index');
    }
}


