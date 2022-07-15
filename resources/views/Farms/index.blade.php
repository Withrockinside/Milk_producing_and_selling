@extends('layout')

@section('title')
    Farm
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($farms as $farm)
            <tr>
                <th scope="row">
                    <a href="{{ route('farms.show', $farm->id) }}">
                        {{ $farm->id }}
                    </a>
                </th>
                <td>
                    {{ $farm->name }}
                </td>
                <td>
                    {{ $farm->email }}
                </td>
                <td>
                    <form action="{{ route('farms.destroy', $farm->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger float-right ml-2">
                            Delete
                        </button>
                    </form>
                    <a class="text-decoration-none" href="{{ route('farms.edit', $farm->id) }}">
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
                <a class="text-decoration-none" href="{{ route('farms.create') }}">
                    <button type="button" class="btn btn-dark float-right">
                        Create
                    </button>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
