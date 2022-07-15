@extends('layout')

@section('title')
    Certificate
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Certificate</th>
        </tr>
        </thead>
    </table>
    <div class="container w-50">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Result</label>
            <div class="col-sm-10">
                <input class="form-control" value="{{ $certificate->name }}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input type="email" class="form-control"value="{{ $certificate->date }}" readonly>
            </div>
        </div>
        <div class="">
            <div class="float-right">
                <a class="text-decoration-none" href="{{ route('farms.cows.certificates.edit',
                [$farm->id, $cow->id,$certificate->id]) }}">
                    <button type="button" class="btn btn-warning float-right ml-2">
                        Edit
                    </button>
                </a>
            </div>
            <div class="float-right">
                <form action="{{ route('farms.cows.certificates.destroy', 
                [$farm->id, $cow->id,$certificate->id]) }}" method="post">
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
