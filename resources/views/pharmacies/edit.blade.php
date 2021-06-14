@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit pharmacy</div>


<form action="/pharmacys/edit/{{$pharmacy->id}}" method="POST">
	@csrf

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name"
    value="{{$pharmacy->name}}">
  </div>


  <div class="form-group">
    <label for="description">Description:</label>
    <textarea class="form-control" placeholder="Enter description"  name="description"  value="{{$pharmacy->name}}"></textarea>
  </div>

  <div class="form-group">
    <label for="phone">phone:</label>
    <input type="number" class="form-control" placeholder="Enter phone" id="phone" name="phone" value="{{$pharmacy->name}}">
  </div>

  <div class="form-group">
    <label for="location_id">location:</label>
    <select class="form-control" name="location_id">
      @foreach($location as $location)
      <option value="{{$location->id}}">{{$location->name}}</option>
      @endforeach
      </select>
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
