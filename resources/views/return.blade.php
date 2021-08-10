@extends('master')
@section('content')

<main>
    <div class="search-bar">
      <form action="#" class="search-bar__form">
        <div class="search-bar__form__group">
          <svg class="search-bar__form__icon--header">
                <use xlink:href="images/sprite.svg#icon-arrow-left"></use>
            </svg>
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
          <label for="quantity" class="search-bar__form__label">Quantity:</label>
          <input type="number" id="quantity" class="search-bar__form__input search-bar__form__input--quantity" placeholder="Quantity">
        </div>

        <div class="search-bar__form__group">
          <input type="button" class="search-bar__form__input search-bar__form__input--button" value="Submit">
        </div>
      </form>
    </div>


    <div class="search-result">
      <span class="search-result__labels">#</span>
      <span class="search-result__labels">Barcode</span>
      <span class="search-result__labels">Name</span>
      <span class="search-result__labels">Chemical Name</span>
      <span class="search-result__labels">Format</span>
      <span class="search-result__labels">Dose</span>
      <span class="search-result__labels">QTY</span>
      <span class="search-result__labels">AVL QTY</span>
      <span class="search-result__labels">Net Price</span>
      <span class="search-result__labels">Price</span>
      <span class="search-result__labels">Manufacturer</span>
      <span class="search-result__labels">Roof</span>
      <span class="search-result__labels">EXP</span>
      <span class="search-result__labels">CXL</span>

    </div>

    <div class="bill">
      <div class="bill__group bill__group--first">
        <span class="bill__title">Total:</span>
        <span class="bill__total-price">50$</span>
      </div>
      <div class="bill__group bill__group--second">
        <label for="bill-total-income" class="bill__title">Expense:</label>
        <input type="number" class="bill__total-income" id="bill-total-income" min="0" value="0">
        <span>$</span>
      </div>
      <div class="bill__group">
        <button class="btn btn__hero btn__hero--submit">return</button>
        <button class="btn btn__hero btn__hero--cancel">Cancel</button>
      </div>
    </div>

    <div class="search-result__description">
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
