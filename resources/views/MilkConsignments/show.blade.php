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
            <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Email" name="email" 
                value="{{ $milkConsignment->date->toDateString() }}" readonly>
            </div>
        </div>

        <div class="">
            <div class="float-right">
                <a class="text-decoration-none" href="{{ route('farms.cows.milk-consignments.edit',  
                [$farm->id, $cow->id, $milkConsignment->id]) }}">
                    <button type="button" class="btn btn-warning float-right ml-2">
                        Edit
                    </button>
                </a>
            </div>
            <div class="float-right">
                <form action="{{ route('farms.cows.milk-consignments.destroy',  
                [$farm->id, $cow->id, $milkConsignment->id]) }}" method="post">
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
