@extends('layout')

@section('title')
    Edit Milk Consigment and Cow
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
    Edit & Update
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
      <form method="post" action="{{ route('milkConsigments.update', $milkConsigment->id) }}">
        @csrf
        @method('put')
        <div>
          <select name="farm_id">
            @foreach ($cows as $cow)
              <option value="{{ $cow->id }}">{{ $cow->name }}</option>
            @endforeach
          </select>
        </div>
        <div>
          <select name="milk_consigment_id">
            @foreach ($milkConsigments as $milkConsigment)
              <option value="{{ $milkConsigment->id }}">{{ $milkConsigment->id }}</option>
            @endforeach
          </select>
        </div>
          <button type="submit" class="btn btn-block btn-danger">Update Milk Consigment</button>
      </form>
  </div>
</div>
@endsection