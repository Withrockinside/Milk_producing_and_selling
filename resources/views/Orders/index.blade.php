@extends('layout')

@section('title')
    Orders
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Total Price</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <th scope="row">
                        <a href="{{ route('orders.show', $order->id) }}">
                            {{ $order->id }}
                        </a>
                    </th>
                    <td>
                        {{ $order->date }}
                    </td>
                    <td>
                        {{ $order->total_price }}
                    </td>
                    <td>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger float-right ml-2">
                                Delete
                            </button>
                        </form>
                        <a class="text-decoration-none" href="{{ route('orders.edit', $order->id) }}">
                            <button type="button" class="btn btn-warning float-right">
                                Edit
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="text-decoration-none" href="{{ route('orders.create') }}">
        <button type="button" class="btn btn-dark float-right">
            Create
        </button>
    </a>
@endsection
