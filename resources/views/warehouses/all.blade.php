@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">all warehouses</div>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Name</th>
        <th>phone</th>
        <th>salesman_name</th>
        <th>location</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($warehouse as $warehouse)
      <tr>
        <td>{{ $warehouse->id}}</td>
        <td>{{ $warehouse->name}}</td>
        <td>{{ $warehouse->phone}}</td>
        <td>{{ $warehouse->salesman_name}}</td>
        <td>{{ $warehouse->location->id}}</td>
        <td>
          <a href="/warehouses/edit/{{$warehouse->id }}" class="btn btn-success">Edit </a>
             <a href="/warehouses/delete/{{$warehouse->id }}" class="btn btn-danger">Delete </a>
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
