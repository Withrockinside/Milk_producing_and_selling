@extends('layout')

@section('title')
    Employees
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Type</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">
                        <a href="{{ route('products.show', $product->id) }}">
                            {{ $product->id }}
                        </a>
                    </th>
                    <td>
                        {{ $product->name }}
                    </td>
                    <td>
                        {{ $product->price }}
                    </td>
                    <td>
                        {{ $product->type }}
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger float-right ml-2">
                                Delete
                            </button>
                        </form>
                        <a class="text-decoration-none" href="{{ route('products.edit', $product->id) }}">
                            <button type="button" class="btn btn-warning float-right">
                                Edit
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="text-decoration-none" href="{{ route('products.create') }}">
        <button type="button" class="btn btn-dark float-right">
            Create
        </button>
    </a>
@endsection
