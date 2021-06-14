@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">all products</div>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>#ID</th>
        <th>Name</th>
        <th>barcode</th>
        <th>description</th>
        <th>limit_Qty</th>
        <th>image</th>
        <th>current_price</th>
        <th>net_price</th>
        <th>application</th>
        <th>composition</th>
        <th>side_effects</th>
        <th>notes</th>
        <th>format</th>
        <th>factory</th>
        <th>shelf</th>
        <th>pharmacy</th>
        <th>type</th>
        <th>caliber</th>
        <th>chemicalname</th>

        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($product as $product)
      <tr>
        <td>{{ $product->id}}</td>
        <td>{{ $product->name}}</td>
        <td>{{ $product->barcode}}</td>
        <td>{{ $product->description}}</td>
        <td>{{ $product->limit_Qty}}</td>
        <td><img src="{{asset('upload/'.$user->image)}}" alt="photo"  width="100" height="100"></td>
        <td>{{ $product->current_price}}</td>
        <td>{{ $product->net_price}}</td>
        <td>{{ $product->application}}</td>
        <td>{{ $product->composition}}</td>
        <td>{{ $product->side_effects}}</td>
        <td>{{ $product->notes}}</td>
        <td>{{ $product->format->name}}</td>
        <td>{{ $product->factory->name}}</td>
        <td>{{ $product->shelf->number}}</td>
        <td>{{ $product->pharmacy->name}}</td>
        <td>{{ $product->type->name}}</td>
        <td>{{ $product->caliber->name}}</td>
        <td>{{ $product->chemicalname->name}}</td>

        <td>
          <a href="/products/edit/{{$product->id }}" class="btn btn-success">Edit </a>
             <a href="/products/delete/{{$product->id }}" class="btn btn-danger">Delete </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
