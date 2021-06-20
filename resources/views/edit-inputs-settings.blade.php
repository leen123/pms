
@extends('master')
@section('content')
      <main>
        <div class="edit-inputs">
          <h3 class="page-header-title">Edit Inputs:</h3>
          <div class="edit-inputs__group">
            <button class="btn btn__hero btn__hero--submit btn__hero--edit-settings">Save</button>
            <button class="btn btn__hero btn__hero--cancel btn__hero">Restore</button>
          </div>
        </div>
        <div class="edit-inputs__body">
        	<div class="edit-inputs__column">
        		<div class="edit-inputs__column__header">
        			<span>Formats</span>
        		</div>
        		<div class="edit-inputs__column__details">
        			<div class="edit-inputs__column__details__row">
        				<span class="edit-inputs__column__details__row__number">1-</span>
        				<input id="edit-inputs-format-1" class="edit-inputs__column__details__row__name" value="Liquid" disabled>
        				<label  for="edit-inputs-format-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">
          				<svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg>
        				</label>
        				<span class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--remove">
        					<svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg>
        				</span>
        			</div>
        		</div>
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-format" class="edit-inputs__column__footer__label">New Format:</label>
        			<input type="text" id="add-new-format" placeholder="Add New Format" class="edit-inputs__column__footer__input">
        			<button class="edit-inputs__column__footer__button">Add</button>
        		</div>
        	</div>

        	<div class="edit-inputs__column">
        		<div class="edit-inputs__column__header">
        			<span>Doses</span>
        		</div>
        		<div class="edit-inputs__column__details">
        			<div class="edit-inputs__column__details__row">
        				<span class="edit-inputs__column__details__row__number">1-</span>
        				<input id="edit-inputs-dose-1" class="edit-inputs__column__details__row__name" value="20mg" disabled>
                <label  for="edit-inputs-dose-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">
                  <svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg>
                </label>
        				<span class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--remove">
        					<svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg>
        				</span>
        			</div>
        		</div>
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-dose" class="edit-inputs__column__footer__label">New Dose:</label>
        			<input type="text" id="add-new-dose" placeholder="Add New Dose" class="edit-inputs__column__footer__input">
        			<button class="edit-inputs__column__footer__button">Add</button>
        		</div>
        	</div>

        	<div class="edit-inputs__column">
        		<div class="edit-inputs__column__header">
        			<span>Categories</span>
        		</div>
        		<div class="edit-inputs__column__details">
        			<div class="edit-inputs__column__details__row">
        				<span class="edit-inputs__column__details__row__number">1-</span>
        				<input id="edit-inputs-cat-1" class="edit-inputs__column__details__row__name" value="Medicine" disabled>
                <label  for="edit-inputs-cat-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">
                  <svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg>
                </label>
        				<span class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--remove">
        					<svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg>
        				</span>
        			</div>
        		</div>
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-cat" class="edit-inputs__column__footer__label">New CAT:</label>
        			<input type="text" id="add-new-cat" placeholder="Add New CAT" class="edit-inputs__column__footer__input">
        			<button class="edit-inputs__column__footer__button">Add</button>
        		</div>
        	</div>

        	<div class="edit-inputs__column">
        		<div class="edit-inputs__column__header">
        			<span>Manufacturers</span>
        		</div>
        		<div class="edit-inputs__column__details">
        			<div class="edit-inputs__column__details__row">
        				<span class="edit-inputs__column__details__row__number">1-</span>
        				<input id="edit-inputs-mfr-1" class="edit-inputs__column__details__row__name" value="Alpha Group" disabled>
                <label  for="edit-inputs-mfr-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">
                  <svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg>
                </label>
        				<span class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--remove">
        					<svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg>
        				</span>
        			</div>
        		</div>
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-mfr" class="edit-inputs__column__footer__label">New Mfr:</label>
        			<input type="text" id="add-new-mfr" placeholder="Add New MFR" class="edit-inputs__column__footer__input">
        			<button class="edit-inputs__column__footer__button">Add</button>
        		</div>
        	</div>
        	<div class="edit-inputs__column">
        		<div class="edit-inputs__column__header">
        			<span>Roofs</span>
        		</div>
        		<div class="edit-inputs__column__details">
        			<div class="edit-inputs__column__details__row">
        				<span class="edit-inputs__column__details__row__number">1-</span>
        				<input id="edit-inputs-roof-1" class="edit-inputs__column__details__row__name" value="A1" disabled>
                <label  for="edit-inputs-roof-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">
                  <svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg>
                </label>
        				<span class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--remove">
        					<svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg>
        				</span>
        			</div>
        		</div>
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-roof" class="edit-inputs__column__footer__label">New Roof:</label>
        			<input type="text" id="add-new-roof" placeholder="Add New Roof" class="edit-inputs__column__footer__input">
        			<button class="edit-inputs__column__footer__button">Add</button>
        		</div>
        	</div>
        </div>
      </main>

@stop
