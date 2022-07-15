@extends('layout')

@section('title')
    Employee
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Employee</th>
        </tr>
        </thead>
    </table>
    <div class="container w-50">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Name" name="name" 
                value="{{ $product->name }}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Price" name="price" 
                value="{{ $product->price }}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Type" name="type" 
                value="{{ $product->type }}" readonly>
            </div>
        </div>
        <div class="">
            <div class="float-right">
                <a class="text-decoration-none" href="{{ route('products.edit', $product->id) }}">
                    <button type="button" class="btn btn-warning float-right ml-2">
                        Edit
                    </button>
                </a>
            </div>
            <div class="float-right">
                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger float-right">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
