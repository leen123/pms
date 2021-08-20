@extends('master')
@section('content')
<main>
  <div class="search-bar">
    <form action="#" class="search-bar__form">
      <div class="search-bar__form__group">
        <svg class="search-bar__form__icon--header">
          <use xlink:href="images/sprite.svg#icon-home"></use>
        </svg>
        <label for="search-bar-barcode" class="search-bar__form__label">{{__('pages.barcode')}}:</label>
        <input type="number" id="search-bar-barcode" class="search-bar__form__input search-bar__form__input--barcode" placeholder="{{__('pages.barcode_search')}}">
        <button class="search-bar__form__button">
          <svg class="search-bar__form__icon">
            <use xlink:href="images/sprite.svg#icon-magnifying-glass"></use>
          </svg>
        </button>
      </div>

      <div class="search-bar__form__group">
        <label for="search-bar-name" class="search-bar__form__label">{{__('pages.name')}}:</label>
        <input type="text" id="search-bar-name" class="search-bar__form__input search-bar__form__input--name" placeholder="{{__('pages.name_search')}}">
        <button class="search-bar__form__button">
          <svg class="search-bar__form__icon">
            <use xlink:href="images/sprite.svg#icon-magnifying-glass"></use>
          </svg>
        </button>
      </div>

      <div class="search-bar__form__group">
        <label for="quantity" class="search-bar__form__label">{{__('pages.quantity')}}:</label>
        <input type="number" id="quantity" class="search-bar__form__input search-bar__form__input--quantity" placeholder="{{__('pages.quantity_search')}}">
      </div>

      <div class="search-bar__form__group">
        <input type="button" class="search-bar__form__input search-bar__form__input--button" value="{{__('pages.search')}}">
      </div>
    </form>
  </div>

  <div class="search-result">
    <span class="search-result__labels">#</span>
    <span class="search-result__labels">{{__('pages.barcode')}}</span>
    <span class="search-result__labels">{{__('pages.name')}}</span>
    <span class="search-result__labels">{{__('pages.chemical_name')}}</span>
    <span class="search-result__labels">{{__('pages.format')}}</span>
    <span class="search-result__labels">{{__('pages.dose')}}</span>
    <span class="search-result__labels">{{__('pages.quantity')}}</span>
    <span class="search-result__labels">{{__('pages.avl_quantity')}}</span>
    <span class="search-result__labels">{{__('pages.net_price')}}</span>
    <span class="search-result__labels">{{__('pages.price')}}</span>
    <span class="search-result__labels">{{__('pages.manufacturer')}}</span>
    <span class="search-result__labels">{{__('pages.roof')}}</span>
    <span class="search-result__labels">{{__('pages.exp')}}</span>
    <span class="search-result__labels">{{__('pages.cxl')}}</span>



    <span class="search-result__medicine">1</span>
    <span class="search-result__medicine">6554212</span>
    <span class="search-result__medicine">Paracetamol</span>
    <span class="search-result__medicine">Cetamolphlon</span>
    <span class="search-result__medicine">Ampoule</span>
    <span class="search-result__medicine">100ml</span>
    <input type="number" class="search-result__medicine search-result__medicine--input" min="0" value="0">
    <span class="search-result__medicine search-result__medicine--middle">12</span>
    <span class="search-result__medicine search-result__medicine--middle">4</span>
    <span class="search-result__medicine search-result__medicine--middle">4.5</span>
    <span class="search-result__medicine">Alpha Group</span>
    <span class="search-result__medicine search-result__medicine--middle">A1</span>
    <span class="search-result__medicine">10/6/2022</span>
    <svg class="search-result__icon">
      <use xlink:href="images/sprite.svg#icon-trash"></use>
    </svg>

    <span class="search-result__medicine">2</span>
    <span class="search-result__medicine">1478954</span>
    <span class="search-result__medicine">panthenol</span>
    <span class="search-result__medicine">Hyperrchonalogyacid</span>
    <span class="search-result__medicine">Topical</span>
    <span class="search-result__medicine">30ml</span>
    <input type="number" class="search-result__medicine search-result__medicine--input" min="0" value="0">
    <span class="search-result__medicine search-result__medicine--middle">50</span>
    <span class="search-result__medicine search-result__medicine--middle">15500</span>
    <span class="search-result__medicine search-result__medicine--middle">20000</span>
    <span class="search-result__medicine">Shams Group</span>
    <span class="search-result__medicine search-result__medicine--middle">B1</span>
    <span class="search-result__medicine">10/10/2024</span>
    <svg class="search-result__icon">
      <use xlink:href="images/sprite.svg#icon-trash"></use>
    </svg>
    <span class="search-result__medicine">2</span>
    <span class="search-result__medicine">1478954</span>
    <span class="search-result__medicine">panthenol</span>
    <span class="search-result__medicine">Hyperrchonalogyacid</span>
    <span class="search-result__medicine">Topical</span>
    <span class="search-result__medicine">30ml</span>
    <input type="number" class="search-result__medicine search-result__medicine--input" min="0" value="0">
    <span class="search-result__medicine search-result__medicine--middle">50</span>
    <span class="search-result__medicine search-result__medicine--middle">15500</span>
    <span class="search-result__medicine search-result__medicine--middle">20000</span>
    <span class="search-result__medicine">Shams Group</span>
    <span class="search-result__medicine search-result__medicine--middle">B1</span>
    <span class="search-result__medicine">10/10/2024</span>
    <svg class="search-result__icon">
      <use xlink:href="images/sprite.svg#icon-trash"></use>
    </svg>
    <span class="search-result__medicine">2</span>
    <span class="search-result__medicine">1478954</span>
    <span class="search-result__medicine">panthenol</span>
    <span class="search-result__medicine">Hyperrchonalogyacid</span>
    <span class="search-result__medicine">Topical</span>
    <span class="search-result__medicine">30ml</span>
    <input type="number" class="search-result__medicine search-result__medicine--input" min="0" value="0">
    <span class="search-result__medicine search-result__medicine--middle">50</span>
    <span class="search-result__medicine search-result__medicine--middle">15500</span>
    <span class="search-result__medicine search-result__medicine--middle">20000</span>
    <span class="search-result__medicine">Shams Group</span>
    <span class="search-result__medicine search-result__medicine--middle">B1</span>
    <span class="search-result__medicine">10/10/2024</span>
    <svg class="search-result__icon">
      <use xlink:href="images/sprite.svg#icon-trash"></use>
    </svg>
    <span class="search-result__medicine">2</span>
    <span class="search-result__medicine">1478954</span>
    <span class="search-result__medicine">panthenol</span>
    <span class="search-result__medicine">Hyperrchonalogyacid</span>
    <span class="search-result__medicine">Topical</span>
    <span class="search-result__medicine">30ml</span>
    <input type="number" class="search-result__medicine search-result__medicine--input" min="0" value="0">
    <span class="search-result__medicine search-result__medicine--middle">50</span>
    <span class="search-result__medicine search-result__medicine--middle">15500</span>
    <span class="search-result__medicine search-result__medicine--middle">20000</span>
    <span class="search-result__medicine">Shams Group</span>
    <span class="search-result__medicine search-result__medicine--middle">B1</span>
    <span class="search-result__medicine">10/10/2024</span>
    <svg class="search-result__icon">
      <use xlink:href="images/sprite.svg#icon-trash"></use>
    </svg>
    <span class="search-result__medicine">2</span>
    <span class="search-result__medicine">1478954</span>
    <span class="search-result__medicine">panthenol</span>
    <span class="search-result__medicine">Hyperrchonalogyacid</span>
    <span class="search-result__medicine">Topical</span>
    <span class="search-result__medicine">30ml</span>
    <input type="number" class="search-result__medicine search-result__medicine--input" min="0" value="0">
    <span class="search-result__medicine search-result__medicine--middle">50</span>
    <span class="search-result__medicine search-result__medicine--middle">15500</span>
    <span class="search-result__medicine search-result__medicine--middle">20000</span>
    <span class="search-result__medicine">Shams Group</span>
    <span class="search-result__medicine search-result__medicine--middle">B1</span>
    <span class="search-result__medicine">10/10/2024</span>
    <svg class="search-result__icon">
      <use xlink:href="images/sprite.svg#icon-trash"></use>
    </svg>
  </div>


  <div class="bill">
    <div class="bill__group bill__group--first">
      <span class="bill__title">{{__('pages.total')}}:</span>
      <span class="bill__total-price">50$</span>
    </div>
    <div class="bill__group bill__group--second">
      <label for="bill-total-income" class="bill__title">{{__('pages.income')}}:</label>
      <input type="number" class="bill__total-income" id="bill-total-income" min="0" value="0">
      <span>$</span>
    </div>
    <div class="bill__group">
      <button class="btn btn__hero btn__hero--submit">{{__('pages.submit')}}</button>
      <button class="btn btn__hero btn__hero--cancel">{{__('pages.cancel')}}</button>
    </div>
  </div>
  <div class="search-result__description">
    <div class="search-result__description__text">{{__('pages.description')}}:</div>

    <div class="search-result__description__container">
      <div class="search-result__description__details search-result__description__details--active" style="background-color: var(--color-grey-dark-2);  color: #fff">
        <h3 class="search-result__description__details__label">{{__('pages.indications')}}</h3>
        <span class="search-result__description__details__text">pain reliever and a fever reducer</span>
      </div>

      <div class="search-result__description__details" style="background-color: var(--color-primary); color: #fff">
        <h3 class="search-result__description__details__label">{{__('pages.side_effects')}}</h3>
        <span class="search-result__description__details__text">allergic reaction, flushing</span>
      </div>
      <div class="search-result__description__details" style="background-color: #555; color: #fff">
        <h3 class="search-result__description__details__label">{{__('pages.composition')}}</h3>
        <span class="search-result__description__details__text">maize starch, potassium sorbate</span>
      </div>
      <div class="search-result__description__details" style="background-color: var(--color-primary-dark);
            color: #fff">
        <h3 class="search-result__description__details__label">{{(__('pages.applications'))}}</h3>
        <span class="search-result__description__details__text">treat mild to moderate pain</span>
      </div>
      <div class="search-result__description__details" style="background-color: var(--color-grey-dark-1);
            color: #fff;">
        <h3 class="search-result__description__details__label">{{__('pages.notes')}}</h3>
        <span class="search-result__description__details__text">None</span>
      </div>
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