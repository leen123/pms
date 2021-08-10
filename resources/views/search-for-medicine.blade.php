@extends('master')
@section('content')
      <main>
        <div class="product">
          <div class="search-bar search-bar--edit-product">
            <h3 class="page-header-title">Search for Product:</h3>
            <form action="#" class="search-bar__form search-bar__form--edit-product">
              <div class="search-bar__form__group">
                <label for="search-bar-barcode" class="search-bar__form__label">Barcode:</label>
                <input type="number" id="search-bar-barcode" class="search-bar__form__input search-bar__form__input--barcode" placeholder="Search by barcode">
                <button class="search-bar__form__button">
                  <svg class="search-bar__form__icon">
                    <use xlink:href="images/sprite.svg#icon-magnifying-glass"></use>
                  </svg>
                </button>
              </div>

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
                <input type="button" class="search-bar__form__input search-bar__form__input--button" value="Search">
              </div>
            </form>
          </div>
        </div>

        <div class="search-result search-result--sr">

          <span class="search-result__labels">#</span>
          <span class="search-result__labels">Barcode</span>
          <span class="search-result__labels">Name</span>
          <span class="search-result__labels">Chemical Name</span>
          <span class="search-result__labels">Format</span>
          <span class="search-result__labels">Dose</span>
          <span class="search-result__labels">AVL QTY</span>
          <span class="search-result__labels">Net Price</span>
          <span class="search-result__labels">Price</span>
          <span class="search-result__labels">Manufacturer</span>
          <span class="search-result__labels">Roof</span>
          <span class="search-result__labels">Image</span>
          <span class="search-result__labels">CXL</span>


 @foreach($product as $product)

           <span class="search-result__medicine">{{ $product->id}}</span>
          <span class="search-result__medicine">{{ $product->barcode}}</span>
          <span class="search-result__medicine">{{ $product->name}}</span>
         <span class="search-result__medicine">{{ $product->chemicalname->name}}</span>
          <span class="search-result__medicine">{{ $product->format->name}}</span>
          <span class="search-result__medicine">{{ $product->caliber->name}}</span>
          <span class="search-result__medicine search-result__medicine--middle">{{ $product->limit_Qty}}</span>
          <span class="search-result__medicine search-result__medicine--middle">{{ $product->net_price}}$</span>
          <span class="search-result__medicine search-result__medicine--middle">{{ $product->current_price}}$</span>
          <span class="search-result__medicine">{{ $product->factory->name}}</span>
          <span class="search-result__medicine search-result__medicine--middle">{{ $product->shelf->number}}</span>
          <span class="search-result__medicine"><img src="{{asset('upload/'.$product->image)}}" alt="photo"  width="40" height="40"></span>
          <span class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--remove">
          <a  href="/products/delete/{{$product->id}}"><svg class="search-result__icon">
            <use xlink:href="images/sprite.svg#icon-trash" ></use>
          </svg></a>

          <a  href="/edit-medicine/{{$product->id}}" > <svg class="nav__list__item__icon">
            <use xlink:href="images/sprite.svg#icon-pencil"></use>
          </svg></a>
          </span>

          @endforeach


        </div>

        <div class="search-result__description search-result__description--sr">
          <div class="search-result__description__text">Description:</div>

          <div class="search-result__description__container">
            <div class="search-result__description__details search-result__description__details--active" style="background-color: var(--color-grey-dark-2);  color: #fff">
              <h3 class="search-result__description__details__label">Indications</h3>
              <span class="search-result__description__details__text">pain reliever and a fever reducer</span>
            </div>

             <div class="search-result__description__details" style="background-color: var(--color-primary); color: #fff">
              <h3 class="search-result__description__details__label">Side effects</h3>
              <span class="search-result__description__details__text">allergic reaction, flushing</span>
            </div>
            <div class="search-result__description__details" style="background-color: #555; color: #fff">
              <h3 class="search-result__description__details__label">Composition</h3>
              <span class="search-result__description__details__text">maize starch, potassium sorbate</span>
            </div>
            <div class="search-result__description__details" style="background-color: var(--color-primary-dark);
            color: #fff">
              <h3 class="search-result__description__details__label">Applications</h3>
              <span class="search-result__description__details__text">treat mild to moderate pain</span>
            </div>
            <div class="search-result__description__details" style="background-color: var(--color-grey-dark-1);
            color: #fff;">
              <h3 class="search-result__description__details__label">Notes</h3>
              <span class="search-result__description__details__text">None</span>
            </div>
          </div>
        </div>



        <div class="product__form__group product__form__group--buttons">
          <input type="button" class="product__form__input product__form__input__button" value="Edit">
          <input type="button" class="product__form__input product__form__input__button" value="Clone">
          <input type="button" class="product__form__input product__form__input__button" value="Details">
          <input type="button" class="product__form__input product__form__input__button product__form__input__button--red" value="Remove">
        </div>

      </main>


      <script src="js/script-nav.js"></script>
      <script src="js/script-sub_nav.js"></script>
    @stop
