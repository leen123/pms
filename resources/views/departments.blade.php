@extends('master')
@section('content')

      <main>
        <div class="departments">
          <h3 class="page-header-title">Add New Department:</h3>

          <form action="{{route('store-pharmacy')}}" method="POST">
            @csrf
            <div class="departments__form__group">
              <label for="departments-name" class="departments__form__label">Name:</label>
              <input type="text" id="name" name="name" class="departments__form__input" placeholder="Full Name">
            </div>

            <div class="departments__form__group">
              <label for="departments-telephone" class="departments__form__label">Telephone:</label>
              <input type="number"  id="phone" name="phone" class="departments__form__input" placeholder="Phone Number">
            </div>

            <div class="departments__form__group">
              <label for="departments-location" class="departments__form__label">Location:</label>
              <select  class="departments__form__input" name="location_id" required>>
                @foreach($location as $location)
                <option   class="product__form__input__options" value="{{$location->id}}">{{$location->name}}</option>
                @endforeach
                </select>
            </div>

            <div class="departments__form__group">
              <label for="departments-description" class="departments__form__label">Description:</label>
              <textarea id="departments-description"  name="description" class="departments__form__input departments__form__input--textarea" placeholder="description"></textarea>
            </div>




          <div class="suppliers__btns">
            <button   type="submit" class="btn btn__hero btn__hero--submit">add</button>
        <a href="{{route('departments')}}" class="product__form__input product__form__input__button product__form__input__button--red">Cancel</a>
      </div>
    </form>



          <div class="search-bar search-bar--edit-product search-bar--suppliers">
          	<h3 class="page-header-title page-header-title--suppliers">Departments Details:</h3>
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

          <div class="search-result search-result--departments">
            <span class="search-result__labels">#</span>
            <span class="search-result__labels">Name</span>
            <span class="search-result__labels">Telephone</span>
            <span class="search-result__labels">Location</span>
            <span class="search-result__labels">Edit</span>
            <span class="search-result__labels">Details</span>
            <span class="search-result__labels">Delete</span>
            <span class="search-result__labels">Enable</span>


            @foreach($pharmacy as $pharmacy)

            <span class="search-result__medicine"></span>
            <span class="search-result__medicine">{{ $pharmacy->id}}</span>
            <span class="search-result__medicine">{{ $pharmacy->name}}</span>
            <span class="search-result__medicine">{{ $pharmacy->phone}}</span>
            <span class="search-result__medicine">{{ $pharmacy->location->name}}</span>
            <svg class="search-result__icon">
              <use xlink:href="images/sprite.svg#icon-pencil"></use>
            </svg>
            <svg class="search-result__icon">
              <use xlink:href="images/sprite.svg#icon-news"></use>
            </svg>
         <a  href="/pharmacies/delete/{{$pharmacy->id}}">  <svg class="search-result__icon">
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
