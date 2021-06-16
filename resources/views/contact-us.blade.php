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
                <li class="nav__list__item nav__list__item--active">
                  <a href="contact-us.html" class="nav__list__item__link nav__list__item__link--active">
                    <svg class="nav__list__item__icon nav__list__item__icon--active">
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

        <div class="contact-us">

          <div class="contact-us__details">
            <div class="contact-us__details__group">
              <svg class="contact-us__details__icon">
                <use xlink:href="images/sprite.svg#icon-location2"></use>
              </svg>
              <div class="contact-us__details__group-text">
                <span class="contact-us__details__header">Address:</span>
                <p class="contact-us__details__text">Al-Mazzeh street,<br> beside Alrasheed hospital</p>
              </div>
            </div>

            <div class="contact-us__details__group">
              <svg class="contact-us__details__icon">
                <use xlink:href="images/sprite.svg#icon-phone"></use>
              </svg>
              <div class="contact-us__details__group-text">
                <span class="contact-us__details__header">Phone Number:</span>
                <p class="contact-us__details__text">+963-900000009</p>
              </div>
            </div>

            <div class="contact-us__details__group">
              <svg class="contact-us__details__icon">
                <use xlink:href="images/sprite.svg#icon-mail"></use>
              </svg>
              <div class="contact-us__details__group-text">
                <span class="contact-us__details__header">Email:</span>
                <p class="contact-us__details__text">pharmatygroup2021@gmail.com</p>
              </div>
            </div>
          </div>

          <form action="#" class="contact-us__form">

                <div class="contact-us__form__header">
                  <h3>Contact Us</h3>
                </div>

                <div class="contact-us__form__group">
                  <label for="contact-us__form__full-name" class="contact-us__form__label">Full Name:</label>
                  <input type="text" id="contact-us__form__full-name" placeholder="Full Name" class="contact-us__form__input" required>
                </div>

                <div class="contact-us__form__group">
                  <label for="contact-us__form__email" class="contact-us__form__label">Email:</label>
                  <input type="email" id="contact-us__form__email" placeholder="Email" class="contact-us__form__input" required>
                </div>

                <div class="contact-us__form__group">
                  <label for="contact-us__form__message" class="contact-us__form__label">Message:</label>
                  <textarea type="text" id="contact-us__form__message" placeholder="Message" class="contact-us__form__input contact-us__form__input--message" required></textarea>
                </div>

                <a href="#" class="btn btn__launcher btn__launcher--empty login--btn contact-us__form__btn">Send</a>
            </form>
        </div>
      </main>


      <script src="js/script-nav.js"></script>
    </body>
</html>
@stop
