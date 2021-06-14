@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit order</div>


<form action="/orders/edit/{{$order->id}}" method="POST">
	@csrf

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name"
    value="{{$order->name}}">
  </div>

  <div class="form-group">
    <label for="gender">gender:</label>
     <select class="form-control" name="gender" >
      <option value="MALE"
      @if($photographer->gender == 'MALE')
{{"selected"}}
@endif
>Male</option>
       <option value="FEMALE"
        @if($photographer->gender == 'FEMALE')
{{"selected"}}
@endif
>Female</option>

      </select>

  </div>



<div class="form-group">
<label for="date">Date:</label>
<input type="text" class="form-control" placeholder="Enter date" id="date" name="date" value="{{$order->date}}">
</div>


<div class="form-group">
<label for="description">Description:</label>
<textarea class="form-control" placeholder="Enter description"  name="description" value="{{$order->description}}"></textarea>
</div>


<div class="form-group">
<label for="total_price">Total_price:</label>
<input type="number" class="form-control" placeholder="Enter total_price" id="total_price" number="total_price" value="{{$order->total_price}}">
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
