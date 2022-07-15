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
            <th scope="col">Email</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <th scope="row">
                        <a href="{{ route('employees.show', $employee->id) }}">
                            {{ $employee->id }}
                        </a>
                    </th>
                    <td>
                        {{ $employee->name }}
                    </td>
                    <td>
                        {{ $employee->email }}
                    </td>
                    <td>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger float-right ml-2">
                                Delete
                            </button>
                        </form>
                        <a class="text-decoration-none" href="{{ route('employees.edit', 
                        $employee->id) }}">
                            <button type="button" class="btn btn-warning float-right">
                                Edit
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="text-decoration-none" href="{{ route('employees.create') }}">
        <button type="button" class="btn btn-dark float-right">
            Create
        </button>
    </a>
@endsection
