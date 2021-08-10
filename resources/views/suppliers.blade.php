@extends('master')
@section('content')
<main>
    <div class="suppliers">
      <h3 class="page-header-title">Add New Supplier:</h3>

        <form action="{{route('store-warehouse')}}" class="suppliers__form" method="POST">
            @csrf

        <div class="suppliers__form__group">
          <label for="suppliers-full-name" class="suppliers__form__label">Full Name:</label>
          <input type="text" id="name" name="name" required class="suppliers__form__input" placeholder="Full Name">
        </div>

        <div class="suppliers__form__group">
          <label for="suppliers-phone-number" class="suppliers__form__label">Phone Number:</label>
          <input type="number"id="phone" name="phone" required class="suppliers__form__input" placeholder="Phone Number">
        </div>

        <div class="suppliers__form__group">
          <label for="suppliers-warehouse" class="suppliers__form__label">Warehouse:</label>
          <input type="text" id="salesman_name" name="salesman_name" required class="suppliers__form__input" placeholder="Warehouse">
        </div>

        <div class="suppliers__form__group">
            <label for="suppliers-location" class="suppliers__form__label">Location:</label>
            <select   class="suppliers__form__input" name="location_id" required>
              @foreach($location as $location)
              <option   class="product__form__input__options" value="{{$location->id}}">{{$location->name}}</option>
              @endforeach
              </select>
          </div>

      <div class="suppliers__btns">
        <button   type="submit" class="btn btn__hero btn__hero--submit">add</button>
        <a href="{{route('suppliers')}}" class="product__form__input product__form__input__button product__form__input__button--red">Cancel</a>
      </div>
    </form>

      <div class="search-bar search-bar--edit-product search-bar--suppliers">
          <h3 class="page-header-title page-header-title--suppliers">Suppliers Details:</h3>
        <form action="#" class="search-bar__form search-bar__form--edit-product">
          <div class="search-bar__form__group">
            <label for="search-bar-name" class="search-bar__form__label">Name:</label>
            <input type="text" id="search-bar-name" class="search-bar__form__input search-bar__form__input--name" placeholder="Search by name">
            <button class="search-bar__form__button">
              <svg class="search-bar__form__icon">
                <use xlink:href="images/sprite.svg#icon-magnifying-glass"></use>
              </svg>
            </button>
          </div>

          <div class="search-bar__form__group">
            <label for="search-bar-location" class="search-bar__form__label">Location:</label>
            <input type="text" id="search-bar-location" class="search-bar__form__input search-bar__form__input--location" placeholder="Search by location">
            <button class="search-bar__form__button">
              <svg class="search-bar__form__icon">
                <use xlink:href="images/sprite.svg#icon-magnifying-glass"></use>
              </svg>
            </button>
          </div>

          <div class="search-bar__form__group">
            <input type="button" class="search-bar__form__input search-bar__form__input--button" value="Search">
          </div>
        </form>
      </div>

      <div class="search-result search-result--suppliers">
        <span class="search-result__labels">#</span>
        <span class="search-result__labels">Full Name</span>
        <span class="search-result__labels">Phone Number</span>
        <span class="search-result__labels">Location</span>
        <span class="search-result__labels">Warehouse</span>
        <span class="search-result__labels">Edit</span>
        <span class="search-result__labels">Details</span>
        <span class="search-result__labels">Delete</span>
        <span class="search-result__labels">Enable</span>


        @foreach($warehouse as $warehouse)
        <span class="search-result__medicine"></span>
        <span class="search-result__medicine">{{ $warehouse->id}}</span>
        <span class="search-result__medicine">{{ $warehouse->name}}</span>
        <span class="search-result__medicine">{{ $warehouse->phone}}</span>
        <span class="search-result__medicine">{{ $warehouse->location->id}}</span>
        <span class="search-result__medicine">{{ $warehouse->salesman_name}}</span>

        <svg class="search-result__icon">
          <use xlink:href="images/sprite.svg#icon-pencil"></use>
        </svg>
        <svg class="search-result__icon">
          <use xlink:href="images/sprite.svg#icon-news"></use>
        </svg>
        <a  href="/warehouses/delete/{{$warehouse->id }}">  <svg class="search-result__icon">
          <use xlink:href="images/sprite.svg#icon-trash"></use>
        </svg></a>
        <input type="checkbox" class="search-result__icon search-result__icon--checkbox">
        @endforeach
      </div>
    </div>

  </main>


      <script src="js/script-nav.js"></script>
      <script type="text/javascript">

      </script>
      <!--
      <script type="text/javascript">
        function myFunction() {
          location.replace("launcher.html");
        }
        setTimeout(myFunction, 10000);
      </script>
      -->
    @stop
