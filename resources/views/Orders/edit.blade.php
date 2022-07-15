@extends('layout')

@section('title')
    Edit Order
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Edit Order</th>
        </tr>
        </thead>
    </table>
    <form class="container w-50" action="{{ route('orders.update', $order->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputEmail3" placeholder="Date" 
                name="date" value="{{ $order->date }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Total Price</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Price" name="total_price"
                value="{{ $order->total_price }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Employee</label>
            <div class="col-sm-10">
                <select class="form-select form-select-lg mb-3" 
                aria-label=".form-select-lg example" name="employee_id">
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Products</label>
            <div class="col-sm-10">
                <select class="select" multiple name="products_id[]">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-dark float-right">
            Update
        </button>
    </form>
@endsection
