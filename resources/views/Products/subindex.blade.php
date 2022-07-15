<table class="table w-100 p-3">
    <thead class="">
    <tr>
        <th scope="col">orders</th>
    </tr>
    </thead>
</table>
<table class="table">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Type</th>
    </tr>
    </thead>
    <tbody>
    @if (!is_null($order->products))
        @foreach($order->products as $product)
            <tr>
                <th scope="row">
                    <a href="{{ route('products.show', $product->id) }}">
                        {{ $order->id }}
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
            </tr>
        @endforeach
    @endif
    <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>
