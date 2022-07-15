@extends('layout')

@section('title')
    Edit Milk
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Edit Milk</th>
        </tr>
        </thead>
    </table>
    <form class="container w-50" action="{{ route('mil', $employee->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Name" name="name" 
                value="{{ $employee->name }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" 
                name="email" value="{{ $employee->email }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputEmail3" placeholder="Password" 
                name="password">
            </div>
        </div>

        <button type="submit" class="btn btn-dark float-right">
            Update
        </button>
    </form>
@endsection
