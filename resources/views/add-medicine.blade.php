
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
              <button class="nav__btn nav__btn--close" id="on-nav">
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
                    <a class="nav__list__item__link  nav__list__item__link--sub nav__list__item__link--sub--first" id="on-nav">
                      <svg class="nav__list__item__icon" id="on-nav">
                        <use xlink:href="images/sprite.svg#icon-aid-kit" id="on-nav"></use>
                      </svg>
                      <span id="on-nav">Medicines</span>
                      <svg class="nav__list__item__icon nav__list__item__icon--dropdown--first" id="on-nav">
                        <use xlink:href="images/sprite.svg#icon-chevron-small-right" id="on-nav"></use>
                      </svg>
                    </a>
                    <ul class="nav__sub-list--first" id="on-nav">
                      <li class="nav__list__item">
                        <a href="search-for-medicine.html" class="nav__list__item__link">
                          <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-magnifying-glass"></use>
                          </svg>
                          <span>Search for Medicine</span>
                        </a>
                      </li>
                      <li class="nav__list__item  nav__list__item--active">
                        <a href="add-medicine.html" class="nav__list__item__link nav__list__item__link--active">
                          <svg class="nav__list__item__icon  nav__list__item__icon--active">
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
          <h3 class="page-header-title">Add New Product:</h3>
          <form action="#" class="product__form">
            <div class="product__form__group">
              <label for="add-barcode" class="product__form__label">Barcode:</label>
              <input type="number" id="add-barcode" class="product__form__input" placeholder="Barcode">
            </div>

            <div class="product__form__group">
              <label for="add-name" class="product__form__label">Name:</label>
              <input type="text" id="add-name" class="product__form__input" placeholder="Name">
            </div>

            <div class="product__form__group">
              <label for="add-chemical-name" class="product__form__label">Chemical Name:</label>
              <input type="text" id="add-chemical-name" class="product__form__input" placeholder="Chemical Name">
            </div>

            <div class="product__form__group">
              <label for="add-format" class="product__form__label">Format:</label>
              <select class="product__form__input" id="add-format">
                <option value="" class="product__form__input__options" disabled selected hidden>Choose a format</option>
                <option value="Liquid" class="product__form__input__options">Liquid</option>
                <option value="Tablet" class="product__form__input__options">Tablet</option>
                <option value="Capsules" class="product__form__input__options">Capsules</option>
                <option value="Topical" class="product__form__input__options">Topical medicines</option>
                <option value="Suppositories" class="product__form__input__options">Suppositories</option>
                <option value="Drops" class="product__form__input__options">Drops</option>
                <option value="Inhalers" class="product__form__input__options">Inhalers</option>
                <option value="injections" class="product__form__input__options">Injections</option>
              </select>
            </div>

            <div class="product__form__group">
              <label for="add-dose" class="product__form__label">Dose:</label>
              <select class="product__form__input" id="add-dose">
                <option value="" class="product__form__input__options" disabled selected hidden>Choose a dose</option>
                <option value="500mg" class="product__form__input__options">500mg</option>
                <option value="50mg" class="product__form__input__options">50mg</option>
                <option value="200ml" class="product__form__input__options">200ml</option>
                <option value="150ml" class="product__form__input__options">150ml</option>
                <option value="100ml" class="product__form__input__options">100ml</option>
              </select>
            </div>

              <!--
              <div class="product__form__group">
                <label for="add-quantity" class="product__form__label">Quantity:</label>
                <input type="number" id="add-quantity" class="product__form__input" placeholder="Quantity">
              </div>
              -->
            <div class="product__form__group">
              <label for="add-parts" class="product__form__label"># of Parts</label>
              <input type="number" id="add-parts" class="product__form__input" placeholder="number of parts">
            </div>

            <div class="product__form__group">
              <label for="add-net-price" class="product__form__label">Net Price:</label>
              <input type="number" id="add-net-price" class="product__form__input" placeholder="Net Price ($)">
            </div>

            <div class="product__form__group">
              <label for="add-price" class="product__form__label">Price:</label>
              <input type="number" id="add-price" class="product__form__input" placeholder="Price ($)">
            </div>

            <div class="product__form__group">
              <label for="add-price-per-part" class="product__form__label">Price Per Part:</label>
              <input type="number" id="add-price-per-part" class="product__form__input" placeholder="Price Per Part ($)">
            </div>

            <div class="product__form__group">
              <label for="add-category" class="product__form__label">Category:</label>
              <select class="product__form__input" id="add-category">
                <option value="" class="product__form__input__options" disabled selected hidden>Choose a category</option>
                <option value="medicine" class="product__form__input__options">Medicine</option>
                <option value="Cosmatic" class="product__form__input__options">Cosmetic</option>
                <option value="Other" class="product__form__input__options">Other</option>
              </select>
            </div>

            <div class="product__form__group">
              <label for="add-manufacturer" class="product__form__label">Manufacturer:</label>
              <select class="product__form__input" id="add-manufacturer">
                <option value="" class="product__form__input__options" disabled selected hidden>Choose a Mfr</option>
                <option value="Alhana" class="product__form__input__options">AlHana</option>
                <option value="Ward" class="product__form__input__options">Ward</option>
                <option value="Go" class="product__form__input__options">Go</option>
                <option value="Super" class="product__form__input__options">Super</option>
              </select>
            </div>

            <div class="product__form__group">
              <label for="add-roof-label" class="product__form__label">Roof Label:</label>
              <select class="product__form__input" id="add-roof-label">
                <option value="" class="product__form__input__options" disabled selected hidden>Choose a roof</option>
                <option value="A1" class="product__form__input__options">A1</option>
                <option value="A2" class="product__form__input__options">A2</option>
                <option value="B1" class="product__form__input__options">B1</option>
                <option value="B2" class="product__form__input__options">B2</option>
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
              <label for="add-indication" class="product__form__label">Indications:</label>
              <textarea type="text" id="add-indication" placeholder="Indications" class="product__form__input product__form__input__description" required></textarea>
            </div>



            <div class="product__form__group">
              <label for="add-side-effects" class="product__form__label">Side Effects:</label>
              <textarea type="text" id="add-side-effects" placeholder="Side Effects" class="product__form__input product__form__input__description" required></textarea>
            </div>


            <div class="product__form__group">
              <label for="add-composition" class="product__form__label">Composition:</label>
              <textarea type="text" id="add-composition" placeholder="Composition" class="product__form__input product__form__input__description" required></textarea>
            </div>


            <div class="product__form__group">
              <label for="add-application" class="product__form__label">Applications:</label>
              <textarea type="text" id="add-application" placeholder="Applications" class="product__form__input product__form__input__description" required></textarea>
            </div>

            <div class="product__form__group">
              <label for="add-notes" class="product__form__label">Notes:</label>
              <textarea type="text" id="add-notes" placeholder="Notes" class="product__form__input product__form__input__description" required></textarea>
            </div>

            <div class="product__form__group">
              <input type="button" class="product__form__input product__form__input__button" value="Add">
              <input type="button" class="product__form__input product__form__input__button product__form__input__button--red" value="Cancel">
            </div>
          </form>
        </div>
      </main>


      <script src="js/script-nav.js"></script>
      <script src="js/script-sub_nav.js"></script>
    </body>
</html>
@stop
