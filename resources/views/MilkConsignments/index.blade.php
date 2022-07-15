<table class="table w-100 p-3">
    <thead class="">
    <tr>
        <th scope="col">Milk Consignments</th>
    </tr>
    </thead>
</table>
<table class="table">
    <thead class="">
    @if(!is_null($cow->milkConsignments->count() > 0))
        <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
        </tr>
    @endif
    </thead>
    <tbody>
    @foreach($cow->milkConsignments as $milkConsignment)
        <tr>
            <th scope="row">
                <a href="{{ route('farms.cows.milk-consignments.show', 
                [$farm->id, $cow->id, $milkConsignment->id]) }}">
                    {{ $milkConsignment->id }}
                </a>
            </th>
            <td>
                {{ $milkConsignment->date->toDateString() }}
            </td>
            <td>
                <form action="{{ route('farms.cows.milk-consignments.destroy',
                [$farm->id, $cow->id, $milkConsignment->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger float-right ml-2">
                        Delete
                    </button>
                </form>
                <a class="text-decoration-none" href="{{ route('farms.cows.milk-consignments.show', 
                [$farm->id, $cow->id, $milkConsignment->id]) }}">
                    <button type="button" class="btn btn-warning float-right">
                        Edit
                    </button>
                </a>
            </td>
        </tr>
    @endforeach
    <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td>
            <a class="text-decoration-none" href="{{ route('farms.cows.milk-consignments.create', 
            [$farm->id, $cow->id]) }}">
                <button type="button" class="btn btn-dark float-right">
                    Create milk
                </button>
            </a>
        </td>
    </tr>
    </tbody>
</table>
