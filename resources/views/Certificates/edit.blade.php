@extends('layout')

@section('title')
    Edit Certificate
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Create Certificate</th>
        </tr>
        </thead>
    </table>
    <form class="container w-50" action="{{ route('farms.cows.certificates.update', 
    [$farm->id, $cow->id, $certificate->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Result</label>
            <div class="col-sm-10">
                <input class="form-control" placeholder="Result" name="result" 
                value="{{ $certificate->result }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" placeholder="Date" name="date" 
                value="{{ $certificate->date }}">
            </div>
        </div>
        <button type="submit" class="btn btn-dark float-right">
            Update
        </button>
    </form>
@endsection
