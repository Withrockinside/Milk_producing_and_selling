@extends('layout')

@section('title')
    Milk consigments and cows
@endsection

@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Milk Consigment</td>
          <td>Cow</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($milkConsigment as $milkConsigments)
        <tr>
            <td>{{$milkConsigments->id}}</td>
            <td>{{$milkConsigments->date}}</td>
            <td>{{$milkConsigments->date}}</td>
            <td class="text-center">
                <a href="{{ route('milkConsigments.edit', $milkConsigments->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('milkConsigments.destroy', $milkConsigments->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection