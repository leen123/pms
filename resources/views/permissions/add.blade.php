@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">add permission</div>


<form action="{{route('store-permission')}}" method="POST">
	@csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
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
