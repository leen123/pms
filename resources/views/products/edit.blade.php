@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit product</div>


<form action="/products/edit/{{$product->id}}" method="POST" enctype="multipart/form-data">
	@csrf

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="name" name="name"
    value="{{$product->name}}">
  </div>


  <div class="form-group">
    <label for="barcode">Barcode:</label>
    <input type="text" class="form-control" placeholder="Enter barcode" id="barcode" name="barcode"
    value="{{$product->barcode}}">
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea class="form-control" placeholder="Enter description" name="description"   value="{{$product->description}}"></textarea>

  </div>

  <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control" placeholder="Enter image" id="image" name="image"
    value="{{$product->image}}">
  </div>

  <div class="form-group">
    <label for="application">Application:</label>
    <textarea class="form-control" placeholder="Enter application"  name="application" value="{{$product->application}}"></textarea>

  </div>

  <div class="form-group">
    <label for="composition">Composition:</label>
    <textarea class="form-control" placeholder="Enter composition" name="composition" value="{{$product->composition}}"></textarea>

  </div>

  <div class="form-group">
    <label for="side_effects">Side_effects:</label>
    <textarea class="form-control" placeholder="Enter side_effects" name="side_effects"  value="{{$product->side_effects}}"></textarea>
  </div>

  <div class="form-group">
    <label for="notes">Notes:</label>
    <textarea class="form-control" placeholder="Enter notes" id="notes" name="notes" value="{{$product->notes}}"></textarea>

  </div>

  <div class="form-group">
    <label for="limit_Qty">Limit_Qty:</label>
    <input type="number" class="form-control" placeholder="Enter limit_Qty" id="limit_Qty" name="limit_Qty"
    value="{{$product->limit_Qty}}">
  </div>

  <div class="form-group">
    <label for="current_price">Current_price:</label>
    <input type="number" class="form-control" placeholder="Enter current_price" id="current_price" name="current_price"
    value="{{$product->current_price}}">
  </div>

  <div class="form-group">
    <label for="net_price">Net_price:</label>
    <input type="number" class="form-control" placeholder="Enter net_price" id="net_price" name="net_price"
    value="{{$product->net_price}}">
  </div>

  <div class="form-group">
    <label for="format_id">format:</label>
    <select class="form-control" name="format_id">
      @foreach($format as $format)
      <option value="{{$format->id}}">{{$format->name}}</option>
      @endforeach
      </select>
   </div>

   <div class="form-group">
    <label for="factory_id">factory:</label>
    <select class="form-control" name="factory_id">
      @foreach($factory as $factory)
      <option value="{{$factory->id}}">{{$factory->name}}</option>
      @endforeach
      </select>
   </div>

   <div class="form-group">
    <label for="shelf_id">shelf:</label>
    <select class="form-control" name="shelf_id">
      @foreach($shelf as $shelf)
      <option value="{{$shelf->id}}">{{$shelf->number}}</option>
      @endforeach
      </select>
   </div>

   <div class="form-group">
    <label for="pharmacy_id">pharmacy:</label>
    <select class="form-control" name="pharmacy_id">
      @foreach($pharmacy as $pharmacy)
      <option value="{{$pharmacy->id}}">{{$pharmacy->name}}</option>
      @endforeach
      </select>
   </div>

   <div class="form-group">
    <label for="type_id">type:</label>
    <select class="form-control" name="type_id">
      @foreach($type as $type)
      <option value="{{$type->id}}">{{$type->name}}</option>
      @endforeach
      </select>
   </div>

   <div class="form-group">
    <label for="caliber_id">caliber:</label>
    <select class="form-control" name="caliber_id">
      @foreach($caliber as $caliber)
      <option value="{{$caliber->id}}">{{$caliber->name}}</option>
      @endforeach
      </select>
   </div>

   <div class="form-group">
    <label for="chemicalname_id">chemicalname:</label>
    <select class="form-control" name="chemicalname_id">
      @foreach($chemicalname as $chemicalname)
      <option value="{{$chemicalname->id}}">{{$chemicalname->name}}</option>
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
