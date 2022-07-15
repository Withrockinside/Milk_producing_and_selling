@extends('layout')

@section('title')
    Order
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Order</th>
        </tr>
        </thead>
    </table>
    <div class="container w-50">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputEmail3" placeholder="Date" name="date"
                value="{{ $order->date }}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Total Price</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Price" name="total_price"
                value="{{ $order->total_price }}" readonly>
            </div>
        </div>
        <div class="">
            <div class="float-right">
                <a class="text-decoration-none" href="{{ route('orders.edit', $order->id) }}">
                    <button type="button" class="btn btn-warning float-right ml-2">
                        Edit
                    </button>
                </a>
            </div>
            <div class="float-right">
                <form action="{{ route('orders.destroy', $order->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger float-right">
                        Delete
                    </button>
                </form>
            </div>
        </div>
        @include('products.subindex')
    </div>
@endsection
