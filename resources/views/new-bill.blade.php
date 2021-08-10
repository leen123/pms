@extends('master')
@section('content')
      <main>
        <main>
            <div class="new-bill">

              <div class="search-bar search-bar--edit-product">
                <h3 class="page-header-title">Add New Bill:</h3>
                <form action="#" class="search-bar__form search-bar__form--edit-product">
                  <div class="search-bar__form__group">
                    <label for="search-bar-supplier" class="search-bar__form__label">Supplier:</label>
                    <select class="search-bar__form__input search-bar__form__input--supplier" id="search-bar-supplier">
                      <option value="" class="search-bar__form__input__options" disabled selected hidden>Choose a supplier</option>
                      <option value="Almazzeh pharmacy" class="search-bar__form__input__options">Almazzeh pharmacy</option>
                      <option value="Issa Mansour" class="search-bar__form__input__options">Issa Mansour</option>
                      <option value="Almanarah pharmacy" class="search-bar__form__input__options">Almanarah pharmacy</option>
                      <option value="Zaid Issa" class="search-bar__form__input__options">Zaid Issa</option>
                    </select>
                  </div>

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
                    <input type="button" class="search-bar__form__input search-bar__form__input--button" value="Add">
                  </div>
                </form>
              </div>

              <form action="#" class="product__form">

                <div class="product__form__group">
                  <label for="chemical-name" class="product__form__label">Chemical Name:</label>
                  <input type="text" id="chemical-name" class="product__form__input" placeholder="Chemical Name" value="Cetamolphlon" disabled>
                </div>

                <div class="product__form__group">
                  <label for="format" class="product__form__label">Format:</label>
                  <input type="text" id="format" class="product__form__input" placeholder="Format" value="Tablet" disabled>
                </div>

                <div class="product__form__group">
                  <label for="dose" class="product__form__label">Dose:</label>
                  <input type="text" id="dose" class="product__form__input" placeholder="Dose" value="500mg" disabled>
                </div>

                 <div class="product__form__group">
                  <label for="manufacturer" class="product__form__label">Manufacturer:</label>
                  <input type="text" id="manufacturer" class="product__form__input" placeholder="Manufacturer" value="Alpha Group" disabled>
                </div>

                <div class="product__form__group">
                  <label for="quantity" class="product__form__label">Quantity:</label>
                  <input type="number" id="quantity" class="product__form__input" placeholder="Quantity" min="0" disabled>
                  <label for="quantity" class="product__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>

                <div class="product__form__group">
                  <label for="net-price" class="product__form__label">Net Price:</label>
                  <input type="number" id="net-price" class="product__form__input" placeholder="Net Price ($)" min="0" disabled>
                  <label for="net-price" class="product__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>

                <div class="product__form__group">
                  <label for="price" class="product__form__label">Price:</label>
                  <input type="number" id="price" class="product__form__input" placeholder="Price ($)" min="0" disabled>
                  <label for="price" class="product__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>

                <div class="product__form__group">
                  <label for="exp-date" class="product__form__label">Exp Date:</label>
                  <input type="date" id="exp-date" class="product__form__input" disabled>
                  <label for="exp-date" class="product__form__edit">
                    <svg class="edit-pen-button">
                      <use xlink:href="images/sprite.svg#icon-pencil"></use>
                    </svg>
                  </label>
                </div>

                <!--
                <div class="product__form__group">
                  <label for="add-category" class="product__form__label">Category:</label>
                  <select class="product__form__input" id="add-category">
                    <option value="" class="product__form__input__options" disabled selected hidden>Choose a category</option>
                    <option value="medicine" class="product__form__input__options">Medicine</option>
                    <option value="Cosmatic" class="product__form__input__options">Cosmetic</option>
                    <option value="Other" class="product__form__input__options">Other</option>
                  </select>
                </div>
                -->

                <!--
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
                -->

                <!--
                <div class="product__form__group">
                    <label for="add-prod-date" class="product__form__label">Prod Date:</label>
                    <input type="date" id="add-prod-date" class="product__form__input" placeholder="Prod Date">
                </div>
                -->

                <div class="product__form__group">
                  <input type="button" class="product__form__input product__form__input__button" value="Update">
                  <input type="button" class="product__form__input product__form__input__button product__form__input__button--red" value="Restore">
                </div>
              </form>

              <div class="new-bill__results">
                <div class="search-result search-result--new-bill">
                  <span class="search-result__labels">#</span>
                  <span class="search-result__labels">Barcode</span>
                  <span class="search-result__labels">Name</span>
                  <span class="search-result__labels">Chemical Name</span>
                  <span class="search-result__labels">Format</span>
                  <span class="search-result__labels">Dose</span>
                  <span class="search-result__labels">QTY</span>
                  <span class="search-result__labels">Net Price</span>
                  <span class="search-result__labels">Price</span>
                  <span class="search-result__labels">Total</span>
                  <span class="search-result__labels">Manufacturer</span>

                  <span class="search-result__labels">EXP</span>
                  <span class="search-result__labels">CXL</span>

                  <span class="search-result__medicine">1</span>
                  <span class="search-result__medicine">6554212</span>
                  <span class="search-result__medicine">Paracetamol</span>
                  <span class="search-result__medicine">Cetamolphlon</span>
                  <span class="search-result__medicine">Ampoule</span>
                  <span class="search-result__medicine">100ml</span>
                  <input type="number" class="search-result__medicine search-result__medicine--input" min="0" value="0">
                  <span class="search-result__medicine search-result__medicine--middle">4</span>
                  <span class="search-result__medicine search-result__medicine--middle">4.5</span>
                  <span class="search-result__medicine search-result__medicine--middle">12</span>
                  <span class="search-result__medicine">Alpha Group</span>

                  <span class="search-result__medicine">10/6/2022</span>
                  <svg class="search-result__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg>

                  <span class="search-result__medicine">2</span>
                  <span class="search-result__medicine">1478954</span>
                  <span class="search-result__medicine">panthenol</span>
                  <span class="search-result__medicine">Hyperrchonalogyacid</span>
                  <span class="search-result__medicine">Topical</span>
                  <span class="search-result__medicine">30ml</span>
                  <input type="number" class="search-result__medicine search-result__medicine--input" min="0" value="0">
                  <span class="search-result__medicine search-result__medicine--middle">15000</span>
                  <span class="search-result__medicine search-result__medicine--middle">15500</span>
                  <span class="search-result__medicine search-result__medicine--middle">30000</span>
                  <span class="search-result__medicine">Shams Group</span>

                  <span class="search-result__medicine">10/10/2024</span>
                  <svg class="search-result__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg>

                  <span class="search-result__medicine">2</span>
                  <span class="search-result__medicine">1478954</span>
                  <span class="search-result__medicine">panthenol</span>
                  <span class="search-result__medicine">Hyperrchonalogyacid</span>
                  <span class="search-result__medicine">Topical</span>
                  <span class="search-result__medicine">30ml</span>
                  <input type="number" class="search-result__medicine search-result__medicine--input" min="0" value="0">
                  <span class="search-result__medicine search-result__medicine--middle">50</span>
                  <span class="search-result__medicine search-result__medicine--middle">15500</span>
                  <span class="search-result__medicine search-result__medicine--middle">20000</span>
                  <span class="search-result__medicine">Shams Group</span>

                  <span class="search-result__medicine">10/10/2024</span>
                  <svg class="search-result__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg>

                  <span class="search-result__medicine">2</span>
                  <span class="search-result__medicine">1478954</span>
                  <span class="search-result__medicine">panthenol</span>
                  <span class="search-result__medicine">Hyperrchonalogyacid</span>
                  <span class="search-result__medicine">Topical</span>
                  <span class="search-result__medicine">30ml</span>
                  <input type="number" class="search-result__medicine search-result__medicine--input" min="0" value="0">
                  <span class="search-result__medicine search-result__medicine--middle">50</span>
                  <span class="search-result__medicine search-result__medicine--middle">15500</span>
                  <span class="search-result__medicine search-result__medicine--middle">20000</span>
                  <span class="search-result__medicine">Shams Group</span>

                  <span class="search-result__medicine">10/10/2024</span>
                  <svg class="search-result__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg>

                  <span class="search-result__medicine">2</span>
                  <span class="search-result__medicine">1478954</span>
                  <span class="search-result__medicine">panthenol</span>
                  <span class="search-result__medicine">Hyperrchonalogyacid</span>
                  <span class="search-result__medicine">Topical</span>
                  <span class="search-result__medicine">30ml</span>
                  <input type="number" class="search-result__medicine search-result__medicine--input" min="0" value="0">
                  <span class="search-result__medicine search-result__medicine--middle">50</span>
                  <span class="search-result__medicine search-result__medicine--middle">15500</span>
                  <span class="search-result__medicine search-result__medicine--middle">20000</span>
                  <span class="search-result__medicine">Shams Group</span>

                  <span class="search-result__medicine">10/10/2024</span>
                  <svg class="search-result__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg>

                  <span class="search-result__medicine">2</span>
                  <span class="search-result__medicine">1478954</span>
                  <span class="search-result__medicine">panthenol</span>
                  <span class="search-result__medicine">Hyperrchonalogyacid</span>
                  <span class="search-result__medicine">Topical</span>
                  <span class="search-result__medicine">30ml</span>
                  <input type="number" class="search-result__medicine search-result__medicine--input" min="0" value="0">
                  <span class="search-result__medicine search-result__medicine--middle">50</span>
                  <span class="search-result__medicine search-result__medicine--middle">15500</span>
                  <span class="search-result__medicine search-result__medicine--middle">20000</span>
                  <span class="search-result__medicine">Shams Group</span>

                  <span class="search-result__medicine">10/10/2024</span>
                  <svg class="search-result__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg>

                </div>
              </div>

              <div class="bill">
              <div class="bill__group bill__group--first">
                <span class="bill__title">Total:</span>
                <span class="bill__total-price">50$</span>
              </div>
              <div class="bill__group bill__group--second">
                <label for="bill-total-income" class="bill__title">Expense:</label>
                <input type="number" class="bill__total-income" id="bill-total-income" min="0" value="0">
                <span>$</span>
              </div>
              <div class="bill__group">
                <button class="btn btn__hero btn__hero--submit">Save</button>
                <button class="btn btn__hero btn__hero--cancel">Cancel</button>
              </div>
            </div>

            </div>
          </main>

      </main>



      <script src="js/script-nav.js"></script>
   @stop
