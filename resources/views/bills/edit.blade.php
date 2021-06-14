@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit bill</div>


<form action="/bills/edit/{{$bill->id}}" method="POST">
	@csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name"
    value="{{$bill->name}}">
  </div>

  <div class="form-group">
    <label for="date">Date:</label>
    <input type="text" class="form-control" placeholder="Enter date" id="date" name="date"   value="{{$bill->date}}">
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea class="form-control" placeholder="Enter description" name="description" value="{{$bill->description}}"></textarea>
  </div>


  <div class="form-group">
    <label for="total_price">Total_price:</label>
    <input type="number" class="form-control" placeholder="Enter total_price" id="total_price" name="total_price"value="{{$bill->total_price}}">
  </div>




  <div class="form-group">
    <label for="user_id">user:</label>
    <select class="form-control" name="user_id">
      @foreach($user as $user)
      <option value="{{$user->id}}">{{$user->id}}</option>
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
