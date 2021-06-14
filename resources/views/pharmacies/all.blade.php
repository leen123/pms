@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">all pharmacies</div>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Name</th>
        <th>description</th>
        <th>phone</th>
        <th>location</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pharmacy as $pharmacy)
      <tr>
        <td>{{ $pharmacy->id}}</td>
        <td>{{ $pharmacy->name}}</td>
        <td>{{ $pharmacy->description}}</td>
        <td>{{ $pharmacy->phone}}</td>
        <td>{{ $pharmacy->location->name}}</td>
        <td>
          <a href="/pharmacies/edit/{{$pharmacy->id }}" class="btn btn-success">Edit </a>
             <a href="/pharmacies/delete/{{$pharmacy->id }}" class="btn btn-danger">Delete </a>
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
