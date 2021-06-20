
@extends('master')
@section('content')

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
@stop
