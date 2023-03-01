<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('admin.productManagement')->with('products', $products);
    }

    public function getProduct()
    {
        $products = Products::all();
        return view('customer.orders')->with('products', $products);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Products::create($input);
        return redirect('product')->with('flash_message', 'Product Added!'); //
    }

    public function show($id)
    {
        $products = Products::find($id);
        return view('admin.productShow')->with('products', $products);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::find($id);
        return view('admin.productEdit')->with('products', $products);
    }

    public function update(Request $request, $id)
    {
        $products = Products::find($id);
        $input = $request->all();
        $products->update($input);
        return redirect('product')->with('flash_message', 'Product Added!');
    }

    public function destroy($id)
    {
        Products::destroy($id);
        return redirect('product')->with('flash_message', 'Product deleted!!');
    }
}
