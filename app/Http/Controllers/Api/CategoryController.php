<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
class CategoryController extends Controller
{
    public function index()
    {

        $categories=Category::all();
        //$categories = Category::included()->get();
        //$categories=Category::included()->filter();
        //$categories=Category::included()->filter()->sort()->get();
        //$categories=Category::included()->filter()->sort()->getOrPaginate();
        return response()->json($categories);

        // $categories = Category::orderBy('id', 'desc')->get();
        // return view('Category.index', compact('categories'));
    }

    public function create()
    {
        return view('Category.create');
    }

    public function store(Request $request)

    {


        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:categories',

        ]);

        $category = Category::create($request->all());

        return response()->json($category);
    }
       
    //     $category = new Category();
    //     $category->name = $request->name;
    //     $category->slug = $request->slug;

    //     $category->save();

    //     return redirect()->route('Category.index');
    // }

    public function show($id)
    {

           // $category = Category::findOrFail($id);
        // $category = Category::with(['posts.user'])->findOrFail($id);
        // $category = Category::with(['posts'])->findOrFail($id);
        // $category = Category::included();
        $category = Category::included()->findOrFail($id);
        return response()->json($category);
        //http://api.codersfree1.test/v1/categories/1/?included=posts.user
        // return view('Category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('Category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:categories,slug,' . $category->id,

        ]);

        $category->update($request->all());

        return response()->json($category);
    }

    //     $category->name = $request->name;
    //     $category->slug = $request->slug;

    //     $category->save();

    //     return redirect()->route('Category.index');
    // }
    

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json($category);
    }
}


