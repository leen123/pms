@extends('master')
@section('content')

<body>
<main>
    <div class="users">
      <h3 class="page-header-title">Add New User:</h3>

      <form action="#" class="users__form">
        <div class="users__form__group">
          <label for="users-full-name" class="users__form__label">Full Name:</label>
          <input type="text" id="users-full-name" class="users__form__input" placeholder="Full Name">
        </div>

        <div class="users__form__group">
          <label for="users-username" class="users__form__label">Username:</label>
          <input type="text" id="users-username" class="users__form__input" placeholder="Username">
        </div>

        <div class="users__form__group">
          <label for="users-password" class="users__form__label">Password:</label>
          <input type="Password" id="users-password" class="users__form__input" placeholder="Password">
        </div>

        <div class="users__form__group">
          <label for="users-email" class="users__form__label">Email:</label>
          <input type="email" id="users-email" class="users__form__input" placeholder="Email">
        </div>


        <div class="users__form__group">
          <label for="users-phone-number" class="users__form__label">Phone Number:</label>
          <input type="text" id="users-phone-number" class="users__form__input" placeholder="Phone Number">
        </div>


        <div class="users__form__group">
          <label for="users-role" class="users__form__label">Role:</label>
          <select class="users__form__input" id="users-role">
            <option value="" class="users__form__input__options" disabled selected hidden>Choose a role</option>
            <option value="500mg" class="users__form__input__options">Pharmacist</option>
            <option value="50mg" class="users__form__input__options">Administrator</option>
          </select>
        </div>

        <div class="users__form__group">
          <label for="users-birth" class="users__form__label">Date of Birth:</label>
          <input type="date" id="users-birth" class="users__form__input" placeholder="Date of Birth">
        </div>

        <div class="users__form__group">
          <label for="users-graduation" class="users__form__label">Grad Date:</label>
          <input type="date" id="users-graduation" class="users__form__input" placeholder="Date of Graduation">
        </div>

        <div class="users__form__group">
          <label for="users-notes" class="users__form__label">Notes:</label>
          <textarea id="users-notes" class="users__form__input users__form__input--textarea" placeholder="Notes"></textarea>
        </div>
      </form>

      <div class="users__btns">
          <button class="btn btn__hero btn__hero--submit">Save</button>
          <button class="btn btn__hero btn__hero--cancel">Cancel</button>
      </div>

      <div class="search-bar search-bar--edit-product search-bar--suppliers">
        <h3 class="page-header-title page-header-title--suppliers">Users Details:</h3>
        <form action="#" class="search-bar__form search-bar__form--edit-product">
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
            <label for="search-bar-username" class="search-bar__form__label">Username:</label>
            <input type="text" id="search-bar-username" class="search-bar__form__input search-bar__form__input--username" placeholder="Search by username">
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

      <div class="search-result search-result--users">
        <span class="search-result__labels">#</span>
        <span class="search-result__labels">Full Name</span>
        <span class="search-result__labels">Username</span>
        <span class="search-result__labels">Email</span>
        <span class="search-result__labels">Phone Number</span>
        <span class="search-result__labels">Role</span>
        <span class="search-result__labels">Date of Birth</span>
        <span class="search-result__labels">Grad Date</span>
        <span class="search-result__labels">Edit</span>
        <span class="search-result__labels">Delete</span>
        <span class="search-result__labels">Enable</span>

        <span class="search-result__medicine">1</span>
        <span class="search-result__medicine">Yasser Matar</span>
        <span class="search-result__medicine">NobleSavageX123</span>
        <span class="search-result__medicine">nehMataar21@gmail.com</span>
        <span class="search-result__medicine">+963-9622554411</span>
        <span class="search-result__medicine">Pharmacist</span>
        <span class="search-result__medicine">10/10/1987</span>
        <span class="search-result__medicine">1/1/2000</span>
        <svg class="search-result__icon">
          <use xlink:href="images/sprite.svg#icon-pencil"></use>
        </svg>
        <svg class="search-result__icon">
          <use xlink:href="images/sprite.svg#icon-trash"></use>
        </svg>
        <input type="checkbox" class="search-result__icon search-result__icon--checkbox">

        <span class="search-result__medicine">1</span>
        <span class="search-result__medicine">Yasser Matar</span>
        <span class="search-result__medicine">NobleSavageX123</span>
        <span class="search-result__medicine">nehMataar21@gmail.com</span>
        <span class="search-result__medicine">+963-9622554411</span>
        <span class="search-result__medicine">Pharmacist</span>
        <span class="search-result__medicine">10/10/1987</span>
        <span class="search-result__medicine">1/1/2000</span>
        <svg class="search-result__icon">
          <use xlink:href="images/sprite.svg#icon-pencil"></use>
        </svg>
        <svg class="search-result__icon">
          <use xlink:href="images/sprite.svg#icon-trash"></use>
        </svg>
        <input type="checkbox" class="search-result__icon search-result__icon--checkbox">

        <span class="search-result__medicine">1</span>
        <span class="search-result__medicine">Yasser Matar</span>
        <span class="search-result__medicine">NobleSavageX123</span>
        <span class="search-result__medicine">nehMataar21@gmail.com</span>
        <span class="search-result__medicine">+963-9622554411</span>
        <span class="search-result__medicine">Pharmacist</span>
        <span class="search-result__medicine">10/10/1987</span>
        <span class="search-result__medicine">1/1/2000</span>
        <svg class="search-result__icon">
          <use xlink:href="images/sprite.svg#icon-pencil"></use>
        </svg>
        <svg class="search-result__icon">
          <use xlink:href="images/sprite.svg#icon-trash"></use>
        </svg>
        <input type="checkbox" class="search-result__icon search-result__icon--checkbox">
      </div>
    </div>
  </main>

      <script src="js/script-nav.js"></script>
      <script type="text/javascript">

      </script>

      <!--
      <script type="text/javascript">
        function myFunction() {
          location.replace("launcher.html");
        }
        setTimeout(myFunction, 10000);
      </script>
      -->
</body>
      @stop

