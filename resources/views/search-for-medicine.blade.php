
   @extends('master')
   @section('content')
   <body>
      <nav class="nav">
        <button class="nav__btn nav__btn--open" id="open-btn">
          <i class="fas fa-bars" id="open-btn"></i>
        </button>

        <div class="nav__slider nav__slider--black" id="on-nav">
          <div class="nav__slider nav__slider--green" id="on-nav">
            <div class="nav__slider nav__slider--white" id="on-nav">
              <button class="nav__btn nav__btn--close">
                <i class="fas fa-times"></i>
              </button>

              <div class="logo-with-header">
                <img src="images/logo-green.png" alt="Pharma Logo" class="logo-with-header__image">
                <h3>Pharmaty</h3>
              </div>


              <ul class="nav__list" id="on-nav">
                <li class="nav__list__item">
                  <a href="dashboard.html" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-blackboard"></use>
                    </svg>
                    <span>Dashboard</span>
                  </a>
                </li>
                <li class="nav__list__item">
                  <a href="main.html" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-home"></use>
                    </svg>
                    <span>Home</span>
                  </a>
                </li>
                <li class="nav__list__item" id="sub-nav-title">
                  <div id="on-nav">
                    <a class="nav__list__item__link nav__list__item__link--sub  nav__list__item__link--sub--first" id="on-nav">
                      <svg class="nav__list__item__icon" id="on-nav">
                        <use xlink:href="images/sprite.svg#icon-aid-kit" id="on-nav"></use>
                      </svg>
                      <span id="on-nav">Medicines</span>
                      <svg class="nav__list__item__icon nav__list__item__icon--dropdown--first" id="on-nav">
                        <use xlink:href="images/sprite.svg#icon-chevron-small-right" id="on-nav"></use>
                      </svg>
                    </a>
                    <ul class="nav__sub-list--first" id="on-nav">
                      <li class="nav__list__item  nav__list__item--active">
                        <a href="search-for-medicine.html" class="nav__list__item__link nav__list__item__link--active">
                          <svg class="nav__list__item__icon  nav__list__item__icon--active">
                            <use xlink:href="images/sprite.svg#icon-magnifying-glass"></use>
                          </svg>
                          <span>Search for Medicine</span>
                        </a>
                      </li>
                      <li class="nav__list__item">
                        <a href="add-medicine.html" class="nav__list__item__link">
                          <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-circle-with-plus"></use>
                          </svg>
                          <span>Add Medicine</span>
                        </a>
                      </li>
                      <li class="nav__list__item">
                        <a href="edit-medicine.html" class="nav__list__item__link">
                          <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-pencil"></use>
                          </svg>
                          <span>Edit Medicine</span>
                        </a>
                      </li>
                      <li class="nav__list__item">
                        <a href="remove-medicine.html" class="nav__list__item__link">
                          <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-trash"></use>
                          </svg>
                          <span>Remove Medicine</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav__list__item">
                  <a href="new-bill.html" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-news"></use>
                    </svg>
                    <span>New Bill</span>
                  </a>
                </li>
                <li class="nav__list__item">
                  <a href="my-account.html" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-user"></use>
                    </svg>
                    <span>My account</span>
                  </a>
                </li>
                <li class="nav__list__item" id="sub-nav-title-2">
                  <div id="on-nav">
                    <a class="nav__list__item__link nav__list__item__link--sub--second" id="on-nav">
                      <svg class="nav__list__item__icon" id="on-nav">
                        <use xlink:href="images/sprite.svg#icon-cog" id="on-nav"></use>
                      </svg>
                      <span id="on-nav">Settings</span>
                      <svg class="nav__list__item__icon nav__list__item__icon--dropdown--second" id="on-nav">
                        <use xlink:href="images/sprite.svg#icon-chevron-small-right" id="on-nav"></use>
                      </svg>
                    </a>
                    <ul class="nav__sub-list--second" id="on-nav">
                      <li class="nav__list__item">
                        <a href="general-settings.html" class="nav__list__item__link">
                          <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-equalizer"></use>
                          </svg>
                          <span>General Settings</span>
                        </a>
                      </li>
                      <li class="nav__list__item">
                        <a href="edit-inputs-settings.html" class="nav__list__item__link">
                          <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-pencil"></use>
                          </svg>
                          <span>Edit Inputs</span>
                        </a>
                      </li>
                    </ul>
                  <div>
                </li>
                <li class="nav__list__item">
                  <a href="contact-us.html" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-phone"></use>
                    </svg>
                    <span>Contact us</span>
                  </a>
                </li>
                <li class="nav__list__item">
                  <a href="index.html" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-exit"></use>
                    </svg>
                    <span>Log out</span>
                  </a>
                </li>
              </ul>
              <div class="nav__legal" id="on-nav">
                © 2021 by pharmaty, All rights reserved.
              </div>
            </div>
          </div>
        </div>
      </nav>

      <header class="header-container">
        <div class="header">

          <img src="images/logo-white.png" alt="Logo White" class="header__logo--white">

          <div class="header__text-box">
            <span id = "text" class="header__text-box__text">Pharmaty Management System</span>
          </div>

          <div class="header__user">
            <a href="my-account.html" class="header__user__link">
              <img src="images/user.jpg" alt="User Photo" class="header__user__photo header__user__photo--border">
              <span class="header__user__name">Yasser</span>
            </a>
          </div>
        </div>
      </header>

      <div class="btn btn--sticky">
        <a href="main.html" class="btn--sticky__link" target="_blank">
          <svg class="btn--sticky__icon">
            <use xlink:href="images/sprite.svg#icon-plus"></use>
          </svg>
        </a>
      </div>

      <main>
        <div class="product">
          <div class="search-bar search-bar--edit-product">
            <h3 class="page-header-title">Search for Product:</h3>
            <form action="#" class="search-bar__form search-bar__form--edit-product">
              <div class="search-bar__form__group">
                <label for="search-bar-barcode" class="search-bar__form__label">Barcode</label>
                <input type="number" id="search-bar-barcode" class="search-bar__form__input search-bar__form__input--barcode" placeholder="Search by barcode">
                <button class="search-bar__form__button">
                  <svg class="search-bar__form__icon">
                    <use xlink:href="images/sprite.svg#icon-magnifying-glass"></use>
                  </svg>
                </button>
              </div>

              <div class="search-bar__form__group">
                <label for="search-bar-name" class="search-bar__form__label">Name</label>
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

        <div class="search-result-container search-result-container--larger">
          <span class="search-result-container__labels search-result-container__labels--first">#</span>
          <span class="search-result-container__labels">Barcode</span>
          <span class="search-result-container__labels">Name</span>
          <span class="search-result-container__labels">Format</span>
          <span class="search-result-container__labels">Dose</span>
          <span class="search-result-container__labels">Quantity</span>
          <span class="search-result-container__labels">Net Price</span>
          <span class="search-result-container__labels">Price</span>
          <span class="search-result-container__labels">Manufacturer</span>
          <span class="search-result-container__labels">Current</span>
          <span class="search-result-container__labels">Exp</span>


          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
          <span class="search-result-container__medicine search-result-container__medicine--first">1</span>
          <span class="search-result-container__medicine">1478954</span>
          <span class="search-result-container__medicine">Paracetamol</span>
          <span class="search-result-container__medicine">Ampoule</span>
          <span class="search-result-container__medicine">100ml</span>
          <span class="search-result-container__medicine">5</span>
          <span class="search-result-container__medicine">4$</span>
          <span class="search-result-container__medicine">3.5$</span>
          <span class="search-result-container__medicine">Alpha Group</span>
          <span class="search-result-container__medicine">12</span>
          <span class="search-result-container__medicine">10/6/2022</span>
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
    </body>
</html>
@stop
