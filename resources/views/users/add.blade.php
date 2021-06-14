@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">add user</div>


<form action="{{route('store-user')}}" method="POST">
	@csrf

  <div class="form-group">
    <label for="fullname">Full Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="fullname" name="fullname">
  </div>

  <div class="form-group">
    <label for="username">User Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="username" name="username">
  </div>

  <div class="form-group">
    <label for="birth">Birth:</label>
    <input type="text" class="form-control" placeholder="Enter birth" id="birth" name="birth">
  </div>

  <div class="form-group">
    <label for="birth">Date of grad:</label>
    <input type="text" class="form-control" placeholder="Enter birth" id="birth" name="birth">
  </div>

  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="number" class="form-control" placeholder="Enter number " id="phone" name="phone">
  </div>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
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
    <input type="file" class="form-control" id="image" name="image">
  </div>

  <div class="form-group">
    <label for="notes">Notes:</label>
    <textarea class="form-control" placeholder="Enter notes" name="notes"></textarea>
  </div>

  <div class="form-group">
    <label for="password">password:</label>
    <input type="text" class="form-control" placeholder="Enter password" id="password" name="password">
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
