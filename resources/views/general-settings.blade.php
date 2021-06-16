
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
                    <a class="nav__list__item__link nav__list__item__link--sub--first" id="on-nav">
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
                    <a class="nav__list__item__link nav__list__item__link--sub nav__list__item__link--sub--second" id="on-nav">
                      <svg class="nav__list__item__icon" id="on-nav">
                        <use xlink:href="images/sprite.svg#icon-cog" id="on-nav"></use>
                      </svg>
                      <span id="on-nav">Settings</span>
                      <svg class="nav__list__item__icon nav__list__item__icon--dropdown--second" id="on-nav">
                        <use xlink:href="images/sprite.svg#icon-chevron-small-right" id="on-nav"></use>
                      </svg>
                    </a>
                    <ul class="nav__sub-list--second" id="on-nav">
                      <li class="nav__list__item nav__list__item--active">
                        <a href="general-settings.html" class="nav__list__item__link nav__list__item__link--active">
                          <svg class="nav__list__item__icon nav__list__item__icon--active">
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
         <div class="settings">

          <h3 class="page-header-title">General Settings:</h3>

          <form action="#" class="settings__form">

            <div class="settings__form__group">
              <label for="pharmacy-name" class="settings__form__label">Pharmacy Name:</label>
              <input type="text" id="pharmacy-name" class="settings__form__input" placeholder="Pharmacy Name">
            </div>
            <div class="settings__form__group">
              <label for="pharmacy-location" class="settings__form__label">Pharmacy Location:</label>
              <input type="text" id="pharmacy-location" class="settings__form__input" placeholder="Pharmacy Location">
            </div>
            <div class="settings__form__group">
              <label for="themes" class="settings__form__label">Themes:</label>
              <input type="color" id="themes" class="settings__form__input" placeholder="Barcode">
            </div>

            <div class="settings__form__group">
              <label for="home-hotkey" class="settings__form__label">Hotkeys:</label>
              <div class="settings__form__input__group">
                <div class="settings__form__group">
                  <label for="dashboard-hotkey" class="settings__form__label">Dashboard:</label>
                  <input type="text" id="dashboard-hotkey" class="settings__form__input" placeholder="Hotkey for Dashboard">
                </div>
                <div class="settings__form__group">
                  <label for="home-hotkey" class="settings__form__label">Home:</label>
                  <input type="text" id="home-hotkey" class="settings__form__input" placeholder="Hotkey for Home">
                </div>
                <div class="settings__form__group">
                  <label for="search-hotkey" class="settings__form__label">Search for product:</label>
                  <input type="text" id="search-hotkey" class="settings__form__input" placeholder="Hotkey for Searching">
                </div>
                <div class="settings__form__group">
                  <label for="add-hotkey" class="settings__form__label">Add new product:</label>
                  <input type="text" id="add-hotkey" class="settings__form__input" placeholder="Hotkey for Adding">
                </div>
                <div class="settings__form__group">
                  <label for="edit-hotkey" class="settings__form__label">Edit a product:</label>
                  <input type="text" id="edit-hotkey" class="settings__form__input" placeholder="Hotkey for Editing">
                </div>
                <div class="settings__form__group">
                  <label for="remove-hotkey" class="settings__form__label">Remove a product:</label>
                  <input type="text" id="remove-hotkey" class="settings__form__input" placeholder="Hotkey for Removing">
                </div>
                <div class="settings__form__group">
                  <label for="bill-hotkey" class="settings__form__label">New bill:</label>
                  <input type="text" id="bill-hotkey" class="settings__form__input" placeholder="Hotkey for New Bill">
                </div>
                <div class="settings__form__group">
                  <label for="account-hotkey" class="settings__form__label">My account:</label>
                  <input type="text" id="account-hotkey" class="settings__form__input" placeholder="Hotkey for My Account">
                </div>
                <div class="settings__form__group">
                  <label for="settings-hotkey" class="settings__form__label">Settings:</label>
                  <input type="text" id="settings-hotkey" class="settings__form__input" placeholder="Hotkey for Settings">
                </div>
                <div class="settings__form__group">
                  <label for="contact-us-hotkey" class="settings__form__label">Contact-us:</label>
                  <input type="text" id="contact-us-hotkey" class="settings__form__input" placeholder="Hotkey for Contact-us">
                </div>
              </div>

              <div class="settings__form__group settings__form__group--buttons">
                <input type="button" class="settings__form__input settings__form__input__button" value="Edit">
                <input type="button" class="settings__form__input settings__form__input__button settings__form__input__button--red" value="Restore">
              </div>

            </div>
          </form>
      </main>

      <script src="js/script-nav.js"></script>
      <script src="js/script-sub_nav-2.js"></script>

    </body>
</html>
@stop
