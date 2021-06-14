@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">add order</div>


<form action="{{route('store-order')}}" method="POST">
	@csrf


    <div class="form-group">
        <label for="gender">gender:</label>
         <select class="form-control" name="gender">
          <option value="MALE">Male</option>
           <option value="FEMALE">Female</option>



  <div class="form-group">
    <label for="date">Date:</label>
    <input type="text" class="form-control" placeholder="Enter date" id="date" name="date">
  </div>


  <div class="form-group">
    <label for="description">Description:</label>
    <input type="text" class="form-control" placeholder="Enter description" id="description" name="description">
  </div>


  <div class="form-group">
    <label for="total_price">Total_price:</label>
    <input type="number" class="form-control" placeholder="Enter total_price" id="total_price" number="total_price">
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
