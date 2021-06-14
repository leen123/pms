@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit orderdetail</div>


<form action="/orderdetails/edit/{{$orderdetail->id}}" method="POST">
	@csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name"
    value="{{$orderdetail->name}}">
  </div>



  <div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="number" class="form-control" placeholder="Enter quantity" id="quantity" number="quantity"  value="{{$orderdetail->quantity}}">
  </div>

  <div class="form-group">
    <label for="price">Price:</label>
    <input type="number" class="form-control" placeholder="Enter price" id="price" number="price"value="{{$orderdetail->price}}">
  </div>

  <div class="form-group">
    <label for="order_id">order:</label>
    <select class="form-control" name="order_id">
      @foreach($order as $order)
      <option value="{{$order->id}}">{{$order->id}}</option>
      @endforeach
      </select>
   </div>

   <div class="form-group">
    <label for="product_id">product:</label>
    <select class="form-control" name="order_id">
      @foreach($product as $product)
      <option value="{{$product->id}}">{{$product->id}}</option>
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
