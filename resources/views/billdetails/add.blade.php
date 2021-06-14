@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">add billdetail</div>


<form action="{{route('store-billdetail')}}" method="POST">
	@csrf


  <div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="number" class="form-control" placeholder="Enter quantity " id="quantity" name="quantity">
  </div>

  <div class="form-group">
    <label for="factory_price">Factory price:</label>
    <input type="number" class="form-control" placeholder="Enter factory price " id="factory_price" name="factory_price">
  </div>

  <div class="form-group">
    <label for="selling_price">Selling price:</label>
    <input type="number" class="form-control" placeholder="Enter selling price " id="selling_price" name="selling_price">
  </div>


  <div class="form-group">
    <label for="MGF_date">MGF_date:</label>
    <input type="text" class="form-control" placeholder="Enter MGF_date" id="MGF_date" name="MGF_date">
  </div>


  <div class="form-group">
    <label for="expirty_date">expirty_date:</label>
    <input type="text" class="form-control" placeholder="Enter expirty_date" id="expirty_date" name="expirty_date">
  </div>


  <div class="form-group">
    <label for="price">Price:</label>
    <input type="number" class="form-control" placeholder="Enter price " id="price" name="price">
  </div>


  <div class="form-group">
    <label for="bill_id">Bill:</label>
    <select class="form-control" name="bill_id">
      @foreach($bill as $bill)
      <option value="{{$bill->id}}">{{$bill->id}}</option>
      @endforeach
      </select>
   </div>


  <div class="form-group">
    <label for="product_id">role:</label>
    <select class="form-control" name="product_id">
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
