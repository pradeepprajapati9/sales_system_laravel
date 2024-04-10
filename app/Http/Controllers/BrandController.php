<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    protected $brand;

    public function __construct()
    {
        $this->brand = new Brand();
    }
    public function index()
    {
        $response["brands"] = $this->brand->all();
        return view("brand.index")->with($response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->brand->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $response['brand'] = $this->brand->find($id);
        return view("brand.edit")->with($response);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $brand = $this->brand->find($id);
        $brand->update(array_merge($brand->toArray(), $request->toArray()));
        return redirect("brand")->with("flash_message", "update records");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $brand = $this->brand->find($id);
        $brand->delete();
        return redirect("brand");
    }
}
