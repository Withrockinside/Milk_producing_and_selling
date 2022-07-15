@extends('layout')

@section('title')
    Edit Farm
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Edit Farm</th>
        </tr>
        </thead>
    </table>
    <form class="container w-50" action="{{ route('farms.update', $farm->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Name" name="name" 
                value="{{ $farm->name }}">
            </div>
        </div>
        <button type="submit" class="btn btn-dark float-right">
            Update
        </button>
    </form>
@endsection
