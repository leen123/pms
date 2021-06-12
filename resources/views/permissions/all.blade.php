@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">all permissions</div>

<table class="table table-bpermissioned">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Name</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($permission as $permission)
      <tr>
        <td>{{ $permission->id}}</td>
        <td>{{ $permission->name}}</td>
        <td>
          <a href="/permissions/edit/{{$permission->id }}" class="btn btn-success">Edit </a>
             <a href="/permissions/delete/{{$permission->id }}" class="btn btn-danger">Delete </a>
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
