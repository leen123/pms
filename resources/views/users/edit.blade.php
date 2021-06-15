@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit user</div>


<form action="/users/edit/{{$user->id}}" method="POST" enctype="multipart/form-data">
	@csrf

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name"
    value="{{$user->name}}">
  </div>


  <div class="form-group">
    <label for="fullname">Full Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="fullname" name="fullname" value="{{$user->fullname}}">
  </div>

  <div class="form-group">
    <label for="username">User Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="username" name="username" value="{{$user->username}}" >
  </div>

  <div class="form-group">
    <label for="birth">Birth:</label>
    <input type="text" class="form-control" placeholder="Enter birth" id="birth" name="birth" value="{{$user->birth}}">
  </div>

  <div class="form-group">
    <label for="date_grad">Date of grad:</label>
    <input type="text" class="form-control" placeholder="Enter date_grad" id="date_grad" name="date_grad" value="{{$user->date_grad}}">
  </div>

  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="number" class="form-control" placeholder="Enter number " id="phone" name="phone" value="{{$user->phone}}">
  </div>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" value="{{$user->email}}">
  </div>

  <div class="form-group">
    <label for="role_id">role:</label>
    <select class="form-control" name="role_id">
      @foreach($role as $role)
      <option value="{{$role->id}}">{{$role->name}}</option>
      @endforeach
      </select>
   </div>

  <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control" id="image" name="image" value="{{$user->image}}">
  </div>

  <div class="form-group">
    <label for="notes">Notes:</label>
    <textarea class="form-control" placeholder="Enter notes" name="notes" value="{{$user->notes}}"></textarea>
  </div>

  <div class="form-group">
    <label for="password">password:</label>
    <input type="text" class="form-control" placeholder="Enter password" id="password" name="password" value="{{$user->password}}">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>


                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
