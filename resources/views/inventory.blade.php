
@extends('master')
@section('content')
      <main>
        <div class="search-bar search-bar--edit-product"> <!--we need rename the classes -->
            <h3 class="page-header-title">Inventory:</h3>
            <form action="#" class="search-bar__form search-bar__form--edit-product">
              <div class="search-bar__form__group">
                <label for="search-bar-filter" class="search-bar__form__label">Filter:</label>
                <select class="product__form__input" id="search-bar-filter">
                  <option value="" class="product__form__input__options" disabled selected hidden>Filter By</option>
                  <option value="Today" class="product__form__input__options">Today</option>
                  <option value="Yesterday" class="product__form__input__options">Yesterday</option>
                  <option value="Last-week" class="product__form__input__options">Last Week</option>
                  <option value="Last-month" class="product__form__input__options">Last Month</option>
                  <option value="Last-year" class="product__form__input__options">Last Year</option>
                  <option value="All" class="product__form__input__options">All</option>
                </select>
              </div>

              <div class="search-bar__form__group">
                <label for="search-bar-order-by" class="search-bar__form__label">Order:</label>
                <select class="product__form__input" id="search-bar-order-by">
                  <option value="" class="product__form__input__options" disabled selected hidden>Order</option>
                  <option value="Today" class="product__form__input__options">Ascendingly</option>
                  <option value="Yesterday" class="product__form__input__options">Descendingly</option>
                </select>
              </div>
              <div class="search-bar__form__group">
                <input type="button" class="search-bar__form__input search-bar__form__input--button" value="Submit">
              </div>
            </form>
        </div>

        <div class="inventory">
          <div class="inventory__income">
            <h3 class="inventory__headers">Income</h3>
            <div class="inventory__bill inventory__bill--income">
              <span class="inventory__bill__details">#</span>
              <span class="inventory__bill__details">Date</span>
              <span class="inventory__bill__details">Total Inc</span>
              <span class="inventory__bill__details">Income</span>
              <span class="inventory__bill__details">Pharmacist</span>
              <span class="inventory__bill__details">Info</span>

              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">30/11/2020</span>
              <span class="inventory__bill__details--info">50,000</span>
              <span class="inventory__bill__details--info">49,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">30/11/2020</span>
              <span class="inventory__bill__details--info">50,000</span>
              <span class="inventory__bill__details--info">49,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">30/11/2020</span>
              <span class="inventory__bill__details--info">50,000</span>
              <span class="inventory__bill__details--info">49,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">30/11/2020</span>
              <span class="inventory__bill__details--info">50,000</span>
              <span class="inventory__bill__details--info">49,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">30/11/2020</span>
              <span class="inventory__bill__details--info">50,000</span>
              <span class="inventory__bill__details--info">49,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">30/11/2020</span>
              <span class="inventory__bill__details--info">50,000</span>
              <span class="inventory__bill__details--info">49,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">30/11/2020</span>
              <span class="inventory__bill__details--info">50,000</span>
              <span class="inventory__bill__details--info">49,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">30/11/2020</span>
              <span class="inventory__bill__details--info">50,000</span>
              <span class="inventory__bill__details--info">49,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">30/11/2020</span>
              <span class="inventory__bill__details--info">50,000</span>
              <span class="inventory__bill__details--info">49,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">30/11/2020</span>
              <span class="inventory__bill__details--info">50,000</span>
              <span class="inventory__bill__details--info">49,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">30/11/2020</span>
              <span class="inventory__bill__details--info">50,000</span>
              <span class="inventory__bill__details--info">49,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">30/11/2020</span>
              <span class="inventory__bill__details--info">50,000</span>
              <span class="inventory__bill__details--info">49,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
            </div>
            <div class="inventory__totals">
              <div class="inventory__totals__group">
                <span class="inventory__totals__title inventory__totals__title--expected">Total Income:</span>
                <span class="inventory__totals__details inventory__totals__details--expected inventory__totals__details--expected--income">15,000,000,000</span>
              </div>

              <div class="inventory__totals__group">
                <span class="inventory__totals__title inventory__totals__title--net">Net Income:</span>
                <span class="inventory__totals__details inventory__totals__details--net inventory__totals__details--net--income">14,000,000,000</span>
              </div>
            </div>
          </div>

          <div class="inventory__expenses">
            <h3 class="inventory__headers">Expenses</h3>
            <div class="inventory__bill inventory__bill--expenses">
              <span class="inventory__bill__details">#</span>
              <span class="inventory__bill__details">Date</span>
              <span class="inventory__bill__details">Total Exp</span>
              <span class="inventory__bill__details">Expense</span>
              <span class="inventory__bill__details">Pharmacist</span>
              <span class="inventory__bill__details">Supplier</span>
              <span class="inventory__bill__details">Info</span>

              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">10/12/2020</span>
              <span class="inventory__bill__details--info">10,500,000</span>
              <span class="inventory__bill__details--info">10,000,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">Alpha group</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">10/12/2020</span>
              <span class="inventory__bill__details--info">10,500,000</span>
              <span class="inventory__bill__details--info">10,000,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">Alpha group</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">10/12/2020</span>
              <span class="inventory__bill__details--info">10,500,000</span>
              <span class="inventory__bill__details--info">10,000,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">Alpha group</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">10/12/2020</span>
              <span class="inventory__bill__details--info">10,500,000</span>
              <span class="inventory__bill__details--info">10,000,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">Alpha group</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">10/12/2020</span>
              <span class="inventory__bill__details--info">10,500,000</span>
              <span class="inventory__bill__details--info">10,000,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">Alpha group</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">10/12/2020</span>
              <span class="inventory__bill__details--info">10,500,000</span>
              <span class="inventory__bill__details--info">10,000,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">Alpha group</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">10/12/2020</span>
              <span class="inventory__bill__details--info">10,500,000</span>
              <span class="inventory__bill__details--info">10,000,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">Alpha group</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">10/12/2020</span>
              <span class="inventory__bill__details--info">10,500,000</span>
              <span class="inventory__bill__details--info">10,000,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">Alpha group</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">10/12/2020</span>
              <span class="inventory__bill__details--info">10,500,000</span>
              <span class="inventory__bill__details--info">10,000,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">Alpha group</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">10/12/2020</span>
              <span class="inventory__bill__details--info">10,500,000</span>
              <span class="inventory__bill__details--info">10,000,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">Alpha group</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
              <span class="inventory__bill__details--info">1</span>
              <span class="inventory__bill__details--info">10/12/2020</span>
              <span class="inventory__bill__details--info">10,500,000</span>
              <span class="inventory__bill__details--info">10,000,000</span>
              <span class="inventory__bill__details--info">Dr. Yasser</span>
              <span class="inventory__bill__details--info">Alpha group</span>
              <span class="inventory__bill__details--info">
                <svg class="inventory__bill__details--info__icon">
                  <use xlink:href="images/sprite.svg#icon-news"></use>
                </svg>
              </span>
            </div>
            <div class="inventory__totals">
              <div class="inventory__totals__group">
                <span class="inventory__totals__title inventory__totals__title--expected">Total Expenses:</span>
                <span class="inventory__totals__details inventory__totals__details--expected inventory__totals__details--expected--expenses">15,000,000,000</span>
              </div>

              <div class="inventory__totals__group">
                <span class="inventory__totals__title inventory__totals__title--net">Net Expenses:</span>
                <span class="inventory__totals__details inventory__totals__details--net inventory__totals__details--net--espenses">14,000,000,000</span>
              </div>
            </div>
          </div>
        </div>
        <div class="inventory__totals inventory__totals--final">
          <div class="inventory__totals__group">
            <span class="inventory__totals__title">Total:</span>
            <span class="inventory__totals__details">15,000,000,000</span>
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
