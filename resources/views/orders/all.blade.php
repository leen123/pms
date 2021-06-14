@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">all orders</div>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>#ID</th>
        <th>gender</th>
        <th>date</th>
        <th>description</th>
        <th>total_price</th>
        <th>total_price</th>
        <th>user</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($order as $order)
      <tr>
        <td>{{ $order->id}}</td>
        <td>{{ $order->gender}}</td>
        <td>{{ $order->date}}</td>
        <td>{{ $order->description}}</td>
        <td>{{ $order->total_price}}</td>
        <td>{{ $order->user_id}}</td>

        <td>
          <a href="/orders/edit/{{$order->id }}" class="btn btn-success">Edit </a>
             <a href="/orders/delete/{{$order->id }}" class="btn btn-danger">Delete </a>
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
