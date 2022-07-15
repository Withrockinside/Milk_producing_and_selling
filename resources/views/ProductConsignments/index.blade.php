@extends('layout')

@section('title')
Product Consignments
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Quantity</th>
            <th scope="col">Manufacturing date</th>
            <th scope="col">Expiring date</th>
            <th scope="col">Milk consignment date</th>
            <th scope="col">Product</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach($productConsignments as $productConsignment)
                <tr>
                    <th scope="row">
                        <a href="{{ route('product-consignments.show', $productConsignment->id) }}">
                            {{ $productConsignment->id }}
                        </a>
                    </th>
                    <td>
                        {{ $productConsignment->quantity }}
                    </td>
                    <td>
                        {{ $productConsignment->manufacturing_date }}
                    </td>
                    <td>
                        {{ $productConsignment->expiring_date }}
                    </td>
                    <td>
                        {{ $productConsignment->milkConsignment?->date}}
                    </td>
                    <td>
                        {{ $productConsignment->product?->name }}
                    </td>
                    <td>
                        <form action="{{ route('product-consignments.destroy', 
                        $productConsignment->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger float-right ml-2">
                                Delete
                            </button>
                        </form>
                        <a class="text-decoration-none" href="{{ route('product-consignments.edit', 
                        $productConsignment->id) }}">
                            <button type="button" class="btn btn-warning float-right">
                                Edit
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="text-decoration-none" href="{{ route('product-consignments.create') }}">
        <button type="button" class="btn btn-dark float-right">
            Create
        </button>
    </a>
@endsection
