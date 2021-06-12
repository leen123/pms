@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">all states</div>

<table class="table table-bstateed">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Name</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($state as $state)
      <tr>
        <td>{{ $state->id}}</td>
        <td>{{ $state->name}}</td>
        <td>
          <a href="/states/edit/{{$state->id }}" class="btn btn-success">Edit </a>
             <a href="/states/delete/{{$state->id }}" class="btn btn-danger">Delete </a>
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
