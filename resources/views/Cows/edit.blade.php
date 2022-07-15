@extends('layout')

@section('title')
    Edit Cow
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Create Cow</th>
        </tr>
        </thead>
    </table>
    <form class="container w-50" action="{{ route('farms.cows.update', 
    [$farm->id, $cow->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Name" name="name" 
                value="{{ $cow->name }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Birth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputEmail3" placeholder="Birth" 
                name="date_of_birth" value="{{ $cow->date_of_birth }}">
            </div>
        </div>

        <button type="submit" class="btn btn-dark float-right">
            Update
        </button>
    </form>
@endsection
