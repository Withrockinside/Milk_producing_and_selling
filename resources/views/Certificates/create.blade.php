@extends('layout')

@section('title')
    Create Certificate
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Create Certificate</th>
        </tr>
        </thead>
    </table>
    <form class="container w-50" action="{{ route('farms.cows.certificates.store', [$farm->id, $cow->id]) }}" method="post">
        @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Result</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Result" name="result">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" placeholder="Date" name="date">
            </div>
        </div>
        <button type="submit" class="btn btn-dark float-right">
            Create
        </button>
    </form>
@endsection
