@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">all factories</div>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Name</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($factory as $factory)
      <tr>
        <td>{{ $factory->id}}</td>
        <td>{{ $factory->name}}</td>
        <td>
          <a href="/factories/edit/{{$factory->id }}" class="btn btn-success">Edit </a>
             <a href="/factories/delete/{{$factory->id }}" class="btn btn-danger">Delete </a>
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
