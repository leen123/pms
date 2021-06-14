@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">all users</div>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>#ID</th>
        <th>full name</th>
        <th>user name</th>
        <th>birth</th>
        <th>date grad</th>
        <th>phone</th>
        <th>role</th>
        <th>notes</th>
        <th>image</th>
        <th>email</th>
        <th>password</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($user as $user)
      <tr>
        <td>{{ $user->id}}</td>
        <td>{{ $user->fullname}}</td>
        <td>{{ $user->username}}</td>
        <td>{{ $user->birth}}</td>
        <td>{{ $user->date_grad}}</td>
        <td>{{ $user->phone}}</td>
        <td>{{ $user->role->name}}</td>
        <td>{{ $user->notes}}</td>
        <td><img src="{{asset('upload/'.$user->image)}}" alt="photo"  width="100" height="100"></td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->password}}</td>

        <td>
          <a href="/users/edit/{{$user->id }}" class="btn btn-success">Edit </a>
             <a href="/users/delete/{{$user->id }}" class="btn btn-danger">Delete </a>
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
