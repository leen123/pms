
@extends('master')
@section('content')

      <main>
         <div class="settings">

          <h3 class="page-header-title">General Settings:</h3>

          <form action="#" class="settings__form">
            <div class="settings__form__group settings__form__group--space-between">
              <div class="settings__form__group">
                <label for="pharmacy-name" class="settings__form__label">Pharmacy Name:</label>
                <input type="text" id="pharmacy-name" class="settings__form__input settings__form__input--smaller" placeholder="Pharmacy Name" disabled>
                <label for="pharmacy-name" class="settings__form__edit">
                  <svg class="edit-pen-button">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg>
                </label>
              </div>
              <div class="settings__form__group">
                <label for="pharmacy-location" class="settings__form__label">Pharmacy Location:</label>
                <input type="text" id="pharmacy-location" class="settings__form__input settings__form__input--smaller" placeholder="Pharmacy Location" disabled>
                <label for="pharmacy-location" class="settings__form__edit">
                  <svg class="edit-pen-button">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg>
                </label>
              </div>
              <div class="settings__form__group">
                <label for="themes" class="settings__form__label settings__form__label--smaller">Themes:</label>
                <input type="color" id="themes" class="settings__form__input settings__form__input--smaller" placeholder="Barcode" disabled>
                <label for="themes" class="settings__form__edit">
                  <svg class="edit-pen-button">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg>
                </label>
              </div>
            </div>

            <div class="settings__form__group">
              <label for="home-hotkey" class="settings__form__label">Hotkeys:</label>
              <div class="settings__form__input__group">
                <div class="settings__form__group">
                  <label for="dashboard-hotkey" class="settings__form__label">Dashboard:</label>
                  <input type="text" id="dashboard-hotkey" class="settings__form__input" placeholder="Hotkey for Dashboard" disabled>
                  <label for="dashboard-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="home-hotkey" class="settings__form__label">Home:</label>
                  <input type="text" id="home-hotkey" class="settings__form__input" placeholder="Hotkey for Home" disabled>
                  <label for="home-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="search-hotkey" class="settings__form__label">Search for Product:</label>
                  <input type="text" id="search-hotkey" class="settings__form__input" placeholder="Hotkey for Searching" disabled>
                  <label for="search-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="add-hotkey" class="settings__form__label">Add New Product:</label>
                  <input type="text" id="add-hotkey" class="settings__form__input" placeholder="Hotkey for Adding" disabled>
                  <label for="add-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="edit-hotkey" class="settings__form__label">Edit a Product:</label>
                  <input type="text" id="edit-hotkey" class="settings__form__input" placeholder="Hotkey for Editing" disabled>
                  <label for="edit-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="remove-hotkey" class="settings__form__label">Remove a Product:</label>
                  <input type="text" id="remove-hotkey" class="settings__form__input" placeholder="Hotkey for Removing" disabled>
                  <label for="remove-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="return-hotkey" class="settings__form__label">Return:</label>
                  <input type="text" id="return-hotkey" class="settings__form__input" placeholder="Hotkey for Return" disabled>
                  <label for="return-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="inventory-hotkey" class="settings__form__label">Inventory:</label>
                  <input type="text" id="inventory-hotkey" class="settings__form__input" placeholder="Hotkey for Inventory" disabled>
                  <label for="inventory-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="bill-hotkey" class="settings__form__label">New Bill:</label>
                  <input type="text" id="bill-hotkey" class="settings__form__input" placeholder="Hotkey for New Bill" disabled>
                  <label for="bill-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="suppliers-hotkey" class="settings__form__label">Suppliers:</label>
                  <input type="text" id="suppliers-hotkey" class="settings__form__input" placeholder="Hotkey for Suppliers" disabled>
                  <label for="suppliers-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="account-hotkey" class="settings__form__label">My Account:</label>
                  <input type="text" id="account-hotkey" class="settings__form__input" placeholder="Hotkey for My Account" disabled>
                  <label for="account-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="general-settings-hotkey" class="settings__form__label">General Settings:</label>
                  <input type="text" id="general-settings-hotkey" class="settings__form__input" placeholder="Hotkey for General Settings" disabled>
                  <label for="general-settings-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="edit-inputs-hotkey" class="settings__form__label">Edit Inputs:</label>
                  <input type="text" id="edit-inputs-hotkey" class="settings__form__input" placeholder="Hotkey for Edit Inputs" disabled>
                  <label for="edit-inputs-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
                <div class="settings__form__group">
                  <label for="contact-us-hotkey" class="settings__form__label">Contact-us:</label>
                  <input type="text" id="contact-us-hotkey" class="settings__form__input" placeholder="Hotkey for Contact-us" disabled>
                  <label for="contact-us-hotkey" class="settings__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>
              </div>

              <div class="settings__form__group settings__form__group--buttons">
                <input type="button" class="settings__form__input settings__form__input__button" value="Edit">
                <input type="button" class="settings__form__input settings__form__input__button settings__form__input__button--red" value="Restore">
              </div>

            </div>
          </form>
      </main>

      <footer class="footer">
        <div class="footer__data">
          <span class="footer__data__pharmacy-name">Al-Amal pharmacy</span>
          <a href="my-account.html" class="footer__data__pharmacist-link">Dr. Ahmad Obaid</a>
        </div>
      </footer>
      <script src="js/script-nav.js"></script>
      <script src="js/script-sub_nav-2.js"></script>

    @stop
