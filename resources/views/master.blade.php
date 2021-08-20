<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--our website must be rendered with the width of the device it is used for our website to be responsive-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" /><!--for icons like 3 bars on top of each other and the X icon-->

        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="images/pharma-icon.png">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <title>Pharmaty | hala</title>
    </head>

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
                  <a href="{{route('dashboard')}}" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-blackboard"></use>
                    </svg>
                    <span>{{__('pages.dashboard')}}</span>
                  </a>
                </li>
                <li class="nav__list__item">
                  <a href="{{route('main')}}" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-home"></use>
                    </svg>
                    <span>{{__('pages.home')}}</span>
                  </a>
                </li>
                <li class="nav__list__item" id="sub-nav-title">
                  <div id="on-nav">
                    <a class="nav__list__item__link  nav__list__item__link--sub nav__list__item__link--sub--first" id="on-nav">
                      <svg class="nav__list__item__icon" id="on-nav">
                        <use xlink:href="images/sprite.svg#icon-aid-kit" id="on-nav"></use>
                      </svg>
                      <span id="on-nav">{{__('pages.medicines')}}</span>
                      <svg class="nav__list__item__icon nav__list__item__icon--dropdown--first" id="on-nav">
                        <use xlink:href="images/sprite.svg#icon-chevron-small-right" id="on-nav"></use>
                      </svg>
                    </a>
                    <ul class="nav__sub-list--first" id="on-nav">
                      <li class="nav__list__item">
                        <a href="{{route('search-for-medicine')}}" class="nav__list__item__link">
                          <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-magnifying-glass"></use>
                          </svg>
                          <span>{{__('pages.medicine_search')}}</span>
                        </a>
                      </li>
                      <li class="nav__list__item">
                        <a href="{{route('add-medicine')}}" class="nav__list__item__link">
                          <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-circle-with-plus"></use>
                          </svg>
                          <span>{{{__('pages.add_medicine')}}}</span>
                        </a>
                      </li>
                      <li class="nav__list__item  nav__list__item--active">
                        <a href="" class="nav__list__item__link nav__list__item__link--active">
                          <svg class="nav__list__item__icon  nav__list__item__icon--active">
                            <use xlink:href="images/sprite.svg#icon-pencil"></use>
                          </svg>
                          <span>{{__('pages.edit_medicine')}}</span>
                        </a>
                      </li>
                      <li class="nav__list__item">
                        <a href="{{route('remove-medicine')}}" class="nav__list__item__link">
                          <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-trash"></use>
                          </svg>
                          <span>{{__('pages.remove_medicine')}}</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav__list__item">
                  <a href="{{route('return')}}" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-arrow-left"></use>
                    </svg>
                    <span>{{__('pages.returns')}}</span>
                  </a>
                </li>
                <li class="nav__list__item">
                  <a href="{{route('inventory')}}" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-database"></use>
                    </svg>
                    <span>{{__('pages.inventory')}}</span>
                  </a>
                </li>
                <li class="nav__list__item">
                  <a href="{{route('new-bill')}}" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-news"></use>
                    </svg>
                    <span>{{__('pages.new_bill')}}</span>
                  </a>
                </li>
                <li class="nav__list__item">
                  <a href="{{route('suppliers')}}" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-profile"></use>
                    </svg>
                    <span>{{__('pages.suppliers')}}</span>
                  </a>
                </li>
                <li class="nav__list__item">
                  <a href="{{route('users')}}" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-users"></use>
                    </svg>
                    <span>{{__('pages.users')}}</span>
                  </a>
                </li>
                <li class="nav__list__item nav__list__item--active">
                    <a href="{{route('departments')}}" class="nav__list__item__link nav__list__item__link--active">
                      <svg class="nav__list__item__icon  nav__list__item__icon--active">
                        <use xlink:href="images/sprite.svg#icon-tree"></use>
                      </svg>
                      <span>{{__('pages.departments')}}</span>
                    </a>
                  </li>
                <li class="nav__list__item">
                  <a href="{{route('my-account')}}" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-user"></use>
                    </svg>
                    <span>{{__('pages.my_account')}}</span>
                  </a>
                </li>
                <li class="nav__list__item" id="sub-nav-title-2">
                  <div id="on-nav">
                    <a class="nav__list__item__link nav__list__item__link--sub--second" id="on-nav">
                      <svg class="nav__list__item__icon" id="on-nav">
                        <use xlink:href="images/sprite.svg#icon-cog" id="on-nav"></use>
                      </svg>
                      <span id="on-nav">{{__('pages.settings')}}</span>
                      <svg class="nav__list__item__icon nav__list__item__icon--dropdown--second" id="on-nav">
                        <use xlink:href="images/sprite.svg#icon-chevron-small-right" id="on-nav"></use>
                      </svg>
                    </a>
                    <ul class="nav__sub-list--second" id="on-nav">
                      <li class="nav__list__item">
                        <a href="{{route('general-settings')}}" class="nav__list__item__link">
                          <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-equalizer"></use>
                          </svg>
                          <span>{{__('pages.general_settings')}}</span>
                        </a>
                      </li>
                      <li class="nav__list__item">
                        <a href="{{route('edit-inputs-settings')}}" class="nav__list__item__link">
                          <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-pencil"></use>
                          </svg>
                          <span>{{__('pages.edit_inputs')}}</span>
                        </a>
                      </li>
                      <li class="nav__list__item">
                        <a href="{{route('site')}}" class="nav__list__item__link">
                          <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-pencil"></use>
                          </svg>
                          <span>{{__('pages.edit_sites')}}</span>
                        </a>
                      </li>
                    </ul>
                  <div>
                </li>
                <li class="nav__list__item">
                  <a href="{{route('contact-us')}}" class="nav__list__item__link">
                    <svg class="nav__list__item__icon">
                      <use xlink:href="images/sprite.svg#icon-phone"></use>
                    </svg>
                    <span>Contact us</span>
                  </a>
                </li>
                <li class="nav__list__item">
                  <a href="{{route('index')}}" class="nav__list__item__link">
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
            <span id = "text" class="header__text-box__text">{{__('pages.title')}}</span>
          </div>

          <div class="header__user">
            <a href="{{route('my-account')}}" class="header__user__link">
              <img src="images/user1.jpg" alt="User Photo" class="header__user__photo header__user__photo--border">
              <span class="header__user__name">HALA</span>
            </a>
          </div>
        </div>
      </header>

      <div class="btn btn--sticky">
        <a href="{{route('main')}}" class="btn--sticky__link" target="_blank">
          <svg class="btn--sticky__icon">
            <use xlink:href="images/sprite.svg#icon-plus"></use>
          </svg>
        </a>
      </div>


    @yield('content')

      <footer class="footer">
        <div class="footer__data">
          <span class="footer__data__pharmacy-name">Al-Amal pharmacy</span>
          <a href="{{route('my-account')}}" class="footer__data__pharmacist-link">Dr. Ahmad Obaid</a>
        </div>
      </footer>
    </body>
</html>
