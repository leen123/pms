@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit location</div>


<form action="/locations/edit/{{$location->id}}" method="POST">
	@csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name"
    value="{{$location->name}}">
  </div>

  <div class="form-group">
    <label for="state_id">state:</label>
    <select class="form-control" name="state_id">
      @foreach($state as $state)
      <option value="{{$state->id}}">{{$state->name}}</option>
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
