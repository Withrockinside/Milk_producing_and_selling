@extends('layout')

@section('title')
    Cow
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Cow</th>
        </tr>
        </thead>
    </table>
    <div class="container w-50">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Name" name="name" 
                value="{{ $cow->name }}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Birth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputEmail3" placeholder="Email" 
                name="email" value="{{ $cow->date_of_birth }}" readonly>
            </div>
        </div>
        <div class="">
            <div class="float-right">
                <a class="text-decoration-none" href="{{ route('farms.cows.edit', 
                [$farm->id, $cow->id]) }}">
                    <button type="button" class="btn btn-warning float-right ml-2">
                        Edit
                    </button>
                </a>
            </div>
            <div class="float-right">
                <form action="{{ route('farms.cows.destroy', [$farm->id, $cow->id]) }}" 
                    method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger float-right">
                        Delete
                    </button>
                </form>
            </div>
        </div>
        @include('certificates.index')
        @include('milkConsignments.index')
    </div>

@endsection
