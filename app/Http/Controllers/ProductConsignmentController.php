<?php

namespace App\Http\Controllers;

use App\Models\MilkConsignment;
use App\Models\Product;
use App\Models\ProductConsignment;
use Illuminate\Http\Request;

class ProductConsignmentController extends Controller
{
    public function index()
    {
        $productConsignments =ProductConsignment::all();
        return view('ProductConsignments.index', compact('productConsignments'));
    }

    public function create()
    {
        $products = Product::get();
        $milkConsigments = MilkConsignment::get();
        return view('ProductConsignments.create', compact('products', 'milkConsigments'));
    }

    public function store(Request $request)
    {
        $productConsignments =ProductConsignment::create($request->all());
        return redirect('/product-consignments')->with('completed', 'ProductConsigment has been saved!');
    }

    public function show(ProductConsignment $productConsignment)
    {
        return view('ProductConsignments.show', compact('productConsignment'));
    }

    public function edit($id)
    {
        $products = Product::get();
        $milkConsigments = MilkConsignment::get();
        $productConsignment =ProductConsignment::findOrFail($id);
        return view('ProductConsignments.edit', compact('productConsignment', 'products', 'milkConsigments'));
    }

    public function update(Request $request, $id)
    {
        ProductConsignment::whereId($id)->update([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'manufacturing_date' => $request->manufacturing_date,
            'expiring_date' => $request->expiring_date,
            'milk_consignment_id' => $request->milk_consignment_id,
            ]);
        return redirect('/product-consignments')->with('completed', 'ProductConsigment has been updated');
    }

    public function destroy($id)
    {
        $productConsignments =ProductConsignment::findOrFail($id);
        $productConsignments->delete();
        return redirect('/product-consignments')->with('completed', 'ProductConsigment has been deleted');
    }
}
