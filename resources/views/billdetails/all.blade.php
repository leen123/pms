@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">all billdetails</div>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Quantity</th>
        <th>Factory price</th>
        <th>Selling price</th>
        <th>MGF date</th>
        <th>Expirty date</th>
        <th>Expirty date</th>
        <th>Price</th>
        <th>Bill</th>
        <th>Product</th>
        <th>Control</th>

      </tr>
    </thead>
    <tbody>
      @foreach($billdetail as $billdetail)
      <tr>
        <td>{{ $billdetail->id}}</td>
        <td>{{ $billdetail->quantity}}</td>
        <td>{{ $billdetail->factory_price}}</td>
        <td>{{ $billdetail->factory_price}}</td>
        <td>{{ $billdetail->MGF_date}}</td>
        <td>{{ $billdetail->expirty_date}}</td>
        <td>{{ $billdetail->bill->id}}</td>
        <td>{{ $billdetail->product->id}}</td>
        <td>
          <a href="/billdetails/edit/{{$billdetail->id }}" class="btn btn-success">Edit </a>
             <a href="/billdetails/delete/{{$billdetail->id }}" class="btn btn-danger">Delete </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
