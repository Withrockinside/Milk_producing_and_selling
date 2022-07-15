<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\MilkConsignment;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders =Order::all();
        return view('Orders.index', compact('orders'));
    }
    /**
     * Show the form for creating a new resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::get();
        $products = Product::get();
        return view('Orders.create', compact('employees', 'products'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order =Order::create([
            'employee_id' => $request->employee_id,
            'date' => $request->date,
            'total_price' => $request->total_price,
            ]);
        $order->products()->sync($request->products_id);
        return redirect('/orders')->with('completed', 'Order has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = Employee::get();
        $order =Order::findOrFail($id);
        $products = Product::get();
        return view('Orders.edit', compact('order', 'employees', 'products'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->update([
            'employee_id' => $request->employee_id,
            'date' => $request->date,
            'total_price' => $request->total_price,
            ]);
        $order->products()->sync($request->products_id);
        return redirect('/orders')->with('completed', 'Order has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order =Order::findOrFail($id);
        $order->delete();
        return redirect('/orders')->with('completed', 'Order has been deleted');
    }
}
