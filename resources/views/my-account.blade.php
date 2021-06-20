@extends('master')
@section('content')
      <main>
        <h3 class="page-header-title">My Account:</h3>
        <div class="my-account">
          <div class="my-account__header">
            <img src="images/user1.jpg" alt="profile picture" class="my-account__header__user-image">
            <input type="file" id="my-account-upload-picture" class="my-account__header__user-button" accept=".png,.jpg">
            <label for="my-account-upload-picture" class="my-account__header__user-button__label">Upload new picture
              <svg class="my-account__header__user-button__label__icon">
                <use xlink:href="images/sprite.svg#icon-export"></use>
              </svg>
            </label>

            <div class="my-account__header__user-details">
              <div class="my-account__header__user-details__group">
                <span class="my-account__header__user-details__info">Full Name:</span>
                <span class="my-account__header__user-details__full-name">Yasser Altrabulsi Matar.</span>
              </div>

              <div class="my-account__header__user-details__group">
                <span class="my-account__header__user-details__info">Username:</span>
                <span class="my-account__header__user-details__username">NobleSavageX123.</span>
              </div>

              <div class="my-account__header__user-details__group">
                <span class="my-account__header__user-details__info">Phone Number:</span>
                <span class="my-account__header__user-details__phone-number">+963-962211632.</span>
              </div>

            </div>
          </div>
          <form action="#" class="my-account__form">

            <div class="my-account__form__group">
              <label for="my-account-full-name" class="my-account__form__label">Full Name:</label>
              <input type="text" id="my-account-full-name" class="my-account__form__input" placeholder="Full Name" value="Yasser Altrabulsi Matar" disabled>
              <label for="my-account-full-name" class="my-account__form__edit">
                <svg class="edit-pen-button">
                  <use xlink:href="images/sprite.svg#icon-pencil"></use>
                </svg>
              </label>
            </div>

            <div class="my-account__form__group">
              <label for="my-account-username" class="my-account__form__label">Username:</label>
              <input type="text" id="my-account-username" class="my-account__form__input" placeholder="Username" value="NobleSavageX123" disabled>
              <label for="my-account-username" class="my-account__form__edit">
                <svg class="edit-pen-button">
                  <use xlink:href="images/sprite.svg#icon-pencil"></use>
                </svg>
              </label>
            </div>

            <div class="my-account__form__group">
              <label for="my-account-password" class="my-account__form__label">Password:</label>
              <input type="Password" id="my-account-password" class="my-account__form__input" placeholder="Password" value="0000" disabled>
              <label for="my-account-password" class="my-account__form__edit">
                <svg class="edit-pen-button">
                  <use xlink:href="images/sprite.svg#icon-pencil"></use>
                </svg>
              </label>
            </div>

            <div class="my-account__form__group">
              <label for="my-account-email" class="my-account__form__label">Email:</label>
              <input type="email" id="my-account-email" class="my-account__form__input" placeholder="Email" value="yasser123@gmail.com" disabled>
              <label for="my-account-email" class="my-account__form__edit">
                <svg class="edit-pen-button">
                  <use xlink:href="images/sprite.svg#icon-pencil"></use>
                </svg>
              </label>
            </div>


            <div class="my-account__form__group">
              <label for="my-account-phone-number" class="my-account__form__label">Phone Number:</label>
              <input type="text" id="my-account-phone-number" class="my-account__form__input" placeholder="Phone Number" value="+96390000009" disabled>
              <label for="my-account-phone-number" class="my-account__form__edit">
                <svg class="edit-pen-button">
                  <use xlink:href="images/sprite.svg#icon-pencil"></use>
                </svg>
              </label>
            </div>


            <div class="my-account__form__group">
              <label for="my-account-role" class="my-account__form__label">Role:</label>
              <input type="text" id="my-account-role" class="my-account__form__input" placeholder="Role" value="Pharmacist" disabled>
              <label for="my-account-role" class="my-account__form__edit">
                <svg class="edit-pen-button">
                  <use xlink:href="images/sprite.svg#icon-pencil"></use>
                </svg>
              </label>
            </div>

            <div class="my-account__form__group">
              <label for="my-account-birth" class="my-account__form__label">Date of Birth:</label>
              <input type="date" id="my-account-birth" class="my-account__form__input" placeholder="Date of Birth" disabled>
              <label for="my-account-birth" class="my-account__form__edit">
                <svg class="edit-pen-button">
                  <use xlink:href="images/sprite.svg#icon-pencil"></use>
                </svg>
              </label>
            </div>

            <div class="my-account__form__group">
              <label for="my-account-graduation" class="my-account__form__label">Date of Graduation:</label>
              <input type="date" id="my-account-graduation" class="my-account__form__input" placeholder="Date of Graduation" disabled>
              <label for="my-account-graduation" class="my-account__form__edit">
                <svg class="edit-pen-button">
                  <use xlink:href="images/sprite.svg#icon-pencil"></use>
                </svg>
              </label>
            </div>

            <div class="my-account__form__group">
              <label for="my-account-notes" class="my-account__form__label">Notes:</label>
              <textarea id="my-account-notes" class="my-account__form__input my-account__form__input--textarea" placeholder="Notes"  disabled>None</textarea>
              <label for="my-account-notes" class="my-account__form__edit">
                <svg class="edit-pen-button">
                  <use xlink:href="images/sprite.svg#icon-pencil"></use>
                </svg>
              </label>
            </div>

            <div class="my-account__form__group">
              <input type="button" class="product__form__input product__form__input__button" value="Edit">
              <input type="button" class="product__form__input product__form__input__button product__form__input__button--red" value="Restore">
            </div>
          </form>

        </div>
      </main>



      <script src="js/script-nav.js"></script>
    @stop
