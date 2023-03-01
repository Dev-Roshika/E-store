<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Products;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index()
    {
        //
    }

    public function selectEmployee(Request $request, $id)
    {
        $products = Products::find($id);
        $employees = User::where('role', 'employee')->pluck('name', 'id');
        return view('customer.product', compact('products', 'employees'));
    }

    public function store(Request $request, $id)
    {
        $products = Order::find($id);
        $orders = new Order();

        //$orders->id = $products->id;
        $orders->customer_name = Auth::user()->name;
        $orders->customer_address = Auth::user()->address;
        $orders->customer_mobile = Auth::user()->mobile;
        $orders->product_name = $products->name;
        $orders->product_price = $products->price;
        $orders->date = Carbon::now(); // Set the order date to the current date and time

        $orders->save();

        return redirect()->route('customer.order')->with('success', 'Order has been placed successfully!');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
