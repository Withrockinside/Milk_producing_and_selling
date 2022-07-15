@extends('layout')

@section('title')
    Product Consignment
@endsection

@section('content')
    <table class="table w-100 p-3">
        <thead class="thead-dark">
        <tr>
            <th scope="col"> Product Consignment</th>
        </tr>
        </thead>
    </table>
    <div class="container w-50">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10">
                <input class="form-control" id="inputEmail3" placeholder="Quantity" name="quantity">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Manufacturing date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputEmail3" 
                placeholder="Manufacturing date" name="manufacturing_date">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Expiring date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputEmail3" 
                placeholder="Expiring date" name="expiring_date">
            </div>
        </div>
        <div class="">
            <div class="float-right">
                <a class="text-decoration-none" href="{{ route('product-consignments.edit', 
                $productConsignment->id) }}">
                    <button type="button" class="btn btn-warning float-right ml-2">
                        Edit
                    </button>
                </a>
            </div>
            <div class="float-right">
                <form action="{{ route('product-consignments.edit', $productConsignment->id) }}" 
                    method="post">
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
