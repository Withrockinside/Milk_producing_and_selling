@extends('layout')

@section('title')
    Edit Employee
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Create Employee</th>
        </tr>
        </thead>
    </table>
    <form class="container w-50" action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Name" name="name" 
                value="{{ $product->name }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Price" name="price" 
                value="{{ $product->price }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Type" name="type" 
                value="{{ $product->type }}">
            </div>
        </div>
        <button type="submit" class="btn btn-dark float-right">
            Update
        </button>
    </form>
@endsection
