@extends('master')
@section('content')
      <main>
        <div class="product">
        	<div class="search-bar search-bar--edit-product">
        		<h3 class="page-header-title">Edit current Product:</h3>
            <form action="#" class="search-bar__form search-bar__form--edit-product">
              <div class="search-bar__form__group">
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
                <input type="button" class="search-bar__form__input search-bar__form__input--button" value="Search">
              </div>
            </form>
          </div>


          <form action="#" class="product__form">
            <div class="product__form__group">
              <label for="edit-barcode" class="product__form__label">Barcode:</label>
              <input type="number" id="edit-barcode" class="product__form__input" placeholder="Barcode">
            </div>

            <div class="product__form__group">
              <label for="edit-name" class="product__form__label">Name:</label>
              <input type="text" id="edit-name" class="product__form__input" placeholder="Name">
            </div>

            <div class="product__form__group">
              <label for="edit-chemical-name" class="product__form__label">Chemical Name:</label>
              <input type="text" id="edit-chemical-name" class="product__form__input" placeholder="Chemical Name">
            </div>

            <div class="product__form__group">
              <label for="edit-format" class="product__form__label">Format:</label>
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
              <label for="edit-dose" class="product__form__label">Dose:</label>
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
              <label for="edit-parts" class="product__form__label"># of Parts</label>
              <input type="number" id="edit-parts" class="product__form__input" placeholder="number of parts">
            </div>

            <div class="product__form__group">
              <label for="edit-net-price" class="product__form__label">Net Price:</label>
              <input type="number" id="edit-net-price" class="product__form__input" placeholder="Net Price ($)">
            </div>

            <div class="product__form__group">
              <label for="edit-price" class="product__form__label">Price:</label>
              <input type="number" id="edit-price" class="product__form__input" placeholder="Price ($)">
            </div>

            <div class="product__form__group">
              <label for="edit-price-per-part" class="product__form__label">Price Per Part:</label>
              <input type="number" id="edit-price-per-part" class="product__form__input" placeholder="Price Per Part ($)">
            </div>

            <div class="product__form__group">
              <label for="edit-category" class="product__form__label">Category:</label>
              <select class="product__form__input" id="edit-category">
                <option value="" class="product__form__input__options" disabled selected hidden>Choose a category</option>
                <option value="medicine" class="product__form__input__options">Medicine</option>
                <option value="Cosmatic" class="product__form__input__options">Cosmetic</option>
                <option value="Other" class="product__form__input__options">Other</option>
              </select>
            </div>

            <div class="product__form__group">
              <label for="edit-manufacturer" class="product__form__label">Manufacturer:</label>
              <select class="product__form__input" id="edit-manufacturer">
                <option value="" class="product__form__input__options" disabled selected hidden>Choose a Mfr</option>
                <option value="Alhana" class="product__form__input__options">AlHana</option>
                <option value="Ward" class="product__form__input__options">Ward</option>
                <option value="Go" class="product__form__input__options">Go</option>
                <option value="Super" class="product__form__input__options">Super</option>
              </select>

            </div>

            <div class="product__form__group">
              <label for="edit-roof-label" class="product__form__label">Roof Label:</label>
              <select class="product__form__input" id="edit-roof-label">
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
          <!--
            <div class="product__form__group">
              <label for="edit-image" class="product__form__label">Image:</label>
              <input type="file" id="edit-image" name="img" accept="image/*">
            </div>
          -->
            <div class="product__form__group">
              <label for="edit-indication" class="product__form__label">Indications:</label>
              <textarea type="text" id="edit-indication" placeholder="Indications" class="product__form__input product__form__input__description" required></textarea>
            </div>



            <div class="product__form__group">
              <label for="edit-side-effects" class="product__form__label">Side Effects:</label>
              <textarea type="text" id="edit-side-effects" placeholder="Side Effects" class="product__form__input product__form__input__description" required></textarea>
            </div>


            <div class="product__form__group">
              <label for="edit-composition" class="product__form__label">Composition:</label>
              <textarea type="text" id="edit-composition" placeholder="Composition" class="product__form__input product__form__input__description" required></textarea>
            </div>


            <div class="product__form__group">
              <label for="edit-application" class="product__form__label">Applications:</label>
              <textarea type="text" id="edit-application" placeholder="Applications" class="product__form__input product__form__input__description" required></textarea>
            </div>

            <div class="product__form__group">
              <label for="edit-notes" class="product__form__label">Notes:</label>
              <textarea type="text" id="edit-notes" placeholder="Notes" class="product__form__input product__form__input__description" required></textarea>
            </div>

            <div class="product__form__group">
              <input type="button" class="product__form__input product__form__input__button" value="Edit">
              <input type="button" class="product__form__input product__form__input__button product__form__input__button--red" value="Restore">
            </div>
          </form>
        </div>
      </main>

      <footer class="footer">
        <div class="footer__data">
          <span class="footer__data__pharmacy-name">Al-Amal pharmacy</span>
          <a href="my-account.html" class="footer__data__pharmacist-link">Dr. Ahmad Obaid</a>
        </div>
      </footer>

      <script src="js/script-nav.js"></script>
      <script src="js/script-sub_nav.js"></script>
    @stop
