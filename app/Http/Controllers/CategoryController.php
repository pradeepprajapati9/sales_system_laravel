<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    protected $category;
    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        $response['categories'] = $this->category->all();
        return view("category.index")->with($response);
    }

    public function store(Request $request)
    {
        $this->category->create($request->all());
        return redirect()->back();
    }


    public function edit(string $id)
    {
        $response['category'] = $this->category->find($id);
        return view("category.edit")->with($response);
    }

    public function update(Request $request, string $id)
    {

        $category = $this->category->find($id);
        $category->update(array_merge($category->toArray(),$request->toArray()));
        return redirect("category")->with("flash_message","update records");
    }

    public function destroy(string $id)
    {
        $category = $this->category->find($id);
        $category->delete();
        return redirect("category");
    }
}
