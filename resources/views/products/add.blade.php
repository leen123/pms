
@extends('master')
@section('content')

      <main>
        <div class="product">
          <h3 class="page-header-title">Add New Product:</h3>

            <form action="{{route('store-product')}}" class="product__form" method="POST" enctype="multipart/form-data">

              @csrf

                   <div class="product__form__group">
                    <label for="barcode"  class="product__form__label">Barcode:</label>
                    <input type="text" class="product__form__input" placeholder="Enter barcode" id="barcode" name="barcode">
                  </div>

             <div class="product__form__group">
              <label for="name" class="product__form__label">Name:</label>
              <input type="text"  class="product__form__input" placeholder="Name"  id="name" name="name">
            </div>

            <div class="product__form__group">
    <label for="chemicalname_id"  class="product__form__label" >chemicalname:</label>
    <select class="product__form__input" name="chemicalname_id">
        <option value="" class="product__form__input__options">non</option>
      @foreach($chemicalname as $chemicalname)
      <option  class="product__form__input__options" value="{{$chemicalname->id}}">{{$chemicalname->name}}</option>
      @endforeach
      </select>
   </div>

   <div class="product__form__group">
   <label for="format_id" class="product__form__label">format:</label>
   <select class="product__form__input" name="format_id">
    <option value="" class="product__form__input__options">non</option>
     @foreach($format as $format)
     <option class="product__form__input__options" value="{{$format->id}}">{{$format->name}}</option>
     @endforeach
     </select>
  </div>

            <div class="product__form__group">
    <label for="caliber_id" class="product__form__label">Dose:</label>
    <select class="product__form__input" name="caliber_id">
        <option value="" class="product__form__input__options">non</option>
      @foreach($caliber as $caliber)
      <option class="product__form__input__options" value="{{$caliber->id}}">{{$caliber->name}}</option>
      @endforeach
      </select>
   </div>


   <div class="product__form__group">
    <label for="pharmacy_id"  class="product__form__label">pharmacy:</label>
    <select class="product__form__input" name="pharmacy_id">
        <option value="" class="product__form__input__options">non</option>
      @foreach($pharmacy as $pharmacy)
      <option class="product__form__input__options" value="{{$pharmacy->id}}">{{$pharmacy->name}}</option>
      @endforeach
      </select>
   </div>

   <div class="product__form__group">
    <label for="limit_Qty" class="product__form__label">Limit Qty:</label>
    <input type="number" class="product__form__input" placeholder="Enter limit_Qty" id="limit_Qty" name="limit_Qty">
  </div>

<!--
            <div class="product__form__group">
              <label for="add-parts" class="product__form__label"># of Parts</label>
              <input type="number" id="add-parts" class="product__form__input" placeholder="number of parts">
            </div>
        -->

        <div class="product__form__group">
            <label for="net_price"  class="product__form__label">Net price:</label>
            <input type="number"class="product__form__input" placeholder="Enter net price ($)" id="net_price" name="net_price">
          </div>

            <div class="product__form__group">
    <label for="current_price"  class="product__form__label">Current price:</label>
   <input type="number" class="product__form__input" placeholder="Enter current price ($)" id="current_price" name="current_price">
  </div>

  <!--
            <div class="product__form__group">
              <label for="add-price-per-part" class="product__form__label">Price Per Part:</label>
              <input type="number" id="add-price-per-part" class="product__form__input" placeholder="Price Per Part ($)">
            </div>
        -->

            <div class="product__form__group">
    <label for="type_id"  class="product__form__label">type:</label>
    <select  class="product__form__input" name="type_id">
        <option value="" class="product__form__input__options">non</option>
      @foreach($type as $type)
      <option  class="product__form__input__options" value="{{$type->id}}">{{$type->name}}</option>
      @endforeach
      </select>
   </div>


   <div class="product__form__group">
    <label for="factory_id"  class="product__form__label">Manufacturer:</label>
    <select class="product__form__input" name="factory_id">
        <option value="" class="product__form__input__options">non</option>
      @foreach($factory as $factory)
      <option class="product__form__input__options" value="{{$factory->id}}">{{$factory->name}}</option>
      @endforeach
      </select>
   </div>

            <div class="product__form__group">
    <label for="shelf_id" class="product__form__label">Roof:</label>
    <select class="product__form__input" name="shelf_id">
        <option value="" class="product__form__input__options">non</option>
      @foreach($shelf as $shelf)
      <option class="product__form__input__options" value="{{$shelf->id}}">{{$shelf->number}}</option>
      @endforeach
      </select>
   </div>


              <!--
              <div class="product__form__group">
                <label for="add-prod-date" class="product__form__label">Prod Date:</label>
                <input type="date" id="add-prod-date" class="product__form__input" placeholder="Prod Date">
              </div>


              <div class="product__form__group">
                <label for="add-exp-date" class="product__form__label">Exp Date:</label>
                <input type="date" id="add-exp-date" class="product__form__input" placeholder="Exp Date">
              </div>
              -->
              <div class="product__form__group">
                <label for="description"  class="product__form__label">Description:</label>
                <textarea  class="product__form__input product__form__input__description" required placeholder="Enter description" name="description"></textarea>
              </div>

              <div class="product__form__group">
                <label for="image"  class="product__form__label">Image:</label>
                <input type="file" class="product__form__input" placeholder="Enter image" id="image" name="image">
              </div>


     <div class="product__form__group">
    <label for="application"  class="product__form__label">Application:</label>
    <textarea  class="product__form__input product__form__input__description" required placeholder="Enter application" name="application"></textarea>
  </div>

  <div class="product__form__group">
    <label for="composition"  class="product__form__label">Composition:</label>
    <textarea   class="product__form__input product__form__input__description" required placeholder="Enter composition" name="composition"></textarea>
  </div>

  <div class="product__form__group">
    <label for="side_effects" class="product__form__label">Side_effects:</label>
    <textarea c class="product__form__input product__form__input__description" required placeholder="Enter side_effects" name="side_effects"></textarea>
  </div>

  <div class="product__form__group">
    <label for="notes"  class="product__form__label">Notes:</label>
    <textarea  class="product__form__input product__form__input__description" required placeholder="Enter notes" name="notes"></textarea>
  </div>

            <div class="product__form__group">
              <!--<input type="button" class="product__form__input product__form__input__button" value="Add"> -->
              <button type="submit" class="product__form__input product__form__input__button">Add</button>
              <a href="{{route('main')}}" class="product__form__input product__form__input__button product__form__input__button--red">Cancel</a>
             <!-- <input type="button" class="product__form__input product__form__input__button product__form__input__button--red" value="Cancel"> -->
            </div>
          </form>
        </div>



      <script src="js/script-nav.js"></script>
      <script src="js/script-sub_nav.js"></script>

@stop
