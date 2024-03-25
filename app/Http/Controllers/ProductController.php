<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\CreateProductRequest;
use App\Http\Requests\Products\EditProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('products.index', ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request)
    {
        DB::table('products')->insert([
            "product_name" => $request->product_name,
            "color" => $request->color,
            "memory" => $request->memory,
            "part_number" => $request->part_number,
            "price" => $request->price,
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('products.edit', ["product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditProductRequest $request, string $id)
    {
        DB::table('products')->where('id', $id)->update([
            "product_name" => $request->product_name,
            "color" => $request->color,
            "memory" => $request->memory,
            "part_number" => $request->part_number,
            "price" => $request->price,
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('products.index');
    }
}
