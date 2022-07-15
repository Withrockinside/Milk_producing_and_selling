@extends('layout')

@section('title')
    Create Milk Consigment
@endsection

@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Add Milk Consigment
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('milkConsigments.store') }}">
          @csrf
          <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="form-control" name="date"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Milk Consigment</button>
      </form>
  </div>
</div>
@endsection