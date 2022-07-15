<table class="table w-100 p-3">
    <thead class="">
    <tr>
        <th scope="col">Cows</th>
    </tr>
    </thead>
</table>
<table class="table">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($cows as $cow)
        <tr>
            <th scope="row">
                <a href="{{ route('farms.cows.show', [$farm->id, $cow->id]) }}">
                    {{ $cow->id }}
                </a>
            </th>
            <td>
                {{ $cow->name }}
            </td>
            <td>
                {{ $cow->date_of_birth->toDateString() }}
            </td>
            <td>
                <form action="{{ route('farms.cows.destroy',[$farm->id, $cow->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger float-right ml-2">
                        Delete
                    </button>
                </form>
                <a class="text-decoration-none" href="{{ route('farms.cows.edit', 
                [$farm->id, $cow->id]) }}">
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
            <a class="text-decoration-none" href="{{ route('farms.cows.create', $farm->id) }}">
                <button type="button" class="btn btn-dark float-right">
                    Create Cow
                </button>
            </a>
        </td>
    </tr>
    </tbody>
</table>
