@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">all orderdetails</div>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Name</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orderdetail as $orderdetail)
      <tr>
        <td>{{ $orderdetail->id}}</td>
        <td>{{ $orderdetail->name}}</td>
        <td>
          <a href="/orderdetails/edit/{{$orderdetail->id }}" class="btn btn-success">Edit </a>
             <a href="/orderdetails/delete/{{$orderdetail->id }}" class="btn btn-danger">Delete </a>
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
