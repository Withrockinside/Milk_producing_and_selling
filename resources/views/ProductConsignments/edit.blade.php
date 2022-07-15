@extends('layout')

@section('title')
    Edit Product Consignment
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Edit  Product Consignment</th>
        </tr>
        </thead>
    </table>
    <form class="container w-50" action="{{ route('product-consignments.update', 
    $productConsignment->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Quantity" name="quantity"
                value="{{ $productConsignment->quantity }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Manufacturing date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputEmail3" 
                placeholder="Manufacturing date" name="manufacturing_date" 
                value="{{ $productConsignment->manufacturing_date }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Expiring date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputEmail3" 
                placeholder="Expiring date" name="expiring_date"
                value="{{ $productConsignment->expiring_date }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Product</label>
            <div class="col-sm-10">
                <select class="form-select form-select-lg mb-3" 
                aria-label=".form-select-lg example" name="product_id">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}"
                            @if ($productConsignment->product_id == $product->id)
                                selected
                            @endif>{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Milk Consigment</label>
            <div class="col-sm-10">
                <select class="form-select form-select-lg mb-3" 
                aria-label=".form-select-lg example" name="milk_consignment_id">
                    @foreach ($milkConsigments as $milkConsigment)
                        <option value="{{ $milkConsigment->id }}">{{ $milkConsigment->date }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-dark float-right">
            Update
        </button>
    </form>
@endsection
