<table class="table w-100 p-3">
    <thead class="">
    <tr>
        <th scope="col">Certificate</th>
    </tr>
    </thead>
</table>
<table class="table">
    <thead class="">
    @if(!is_null($cow->certificate))
        <tr>
            <th scope="col">#</th>
            <th scope="col">Result</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
        </tr>
    @endif
    </thead>
    <tbody>
    @if(!is_null($cow->certificate))
        <tr>
            <th scope="row">
                <a href="{{ route('farms.cows.certificates.show', 
                [$farm->id, $cow->id, $cow->certificate->id]) }}">
                    {{ $cow->certificate->id }}
                </a>
            </th>
            <td>
                {{ $cow->certificate->result }}
            </td>
            <td>
                {{ $cow->certificate->date->toDateString() }}
            </td>
            <td>
                <form action="{{ route('farms.cows.certificates.destroy',
                [$farm->id, $cow->id, $cow->certificate->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger float-right ml-2">
                        Delete
                    </button>
                </form>
                <a class="text-decoration-none" href="{{ route('farms.cows.certificates.edit', 
                [$farm->id, $cow->id, $cow->certificate->id]) }}">
                    <button type="button" class="btn btn-warning float-right">
                        Edit
                    </button>
                </a>
            </td>
        </tr>
    @endif
    <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td>
            @if(is_null($cow->certificate))
                <a class="text-decoration-none" href="{{ route('farms.cows.certificates.create', 
                [$farm->id, $cow->id]) }}">
                    <button type="button" class="btn btn-dark float-right">
                        Create Certificate
                    </button>
                </a>
            @endif
        </td>
    </tr>
    </tbody>
</table>
