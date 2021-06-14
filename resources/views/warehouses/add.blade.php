@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">add warehouse</div>


<form action="{{route('store-warehouse')}}" method="POST">
	@csrf

  <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
      </div>

  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="number" class="form-control" placeholder="Enter phone" id="phone" name="phone">
  </div>

  <div class="form-group">
    <label for="salesman_name">Salesman_name:</label>
    <input type="text" class="form-control" placeholder="Enter salesman_name" id="salesman_name" name="salesman_name">
  </div>

  <div class="form-group">
    <label for="location_id">location:</label>
    <select class="form-control" name="location_id">
      @foreach($location as $location)
      <option value="{{$location->id}}">{{$location->id}}</option>
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
