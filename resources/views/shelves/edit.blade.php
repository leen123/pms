@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit shelf</div>


<form action="/shelves/edit/{{$shelf->id}}" method="POST">
	@csrf
  <div class="form-group">
    <label for="number">Number:</label>
    <input type="text" class="form-control" placeholder="Enter number" id="number" name="number"
    value="{{$shelf->number}}">
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
