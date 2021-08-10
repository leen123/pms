
@extends('master')
@section('content')
      <main>
        <div class="edit-inputs">
          <h3 class="page-header-title">Edit sites:</h3>
          <div class="edit-inputs__group">
            <button class="btn btn__hero btn__hero--submit btn__hero--edit-settings">Save</button>
            <button class="btn btn__hero btn__hero--cancel btn__hero">Restore</button>
          </div>
        </div>

        <div class="edit-inputs__body">


        	<div class="edit-inputs__column">
        		<div class="edit-inputs__column__header">
        			<span>states</span>
        		</div>
        		<div class="edit-inputs__column__details">

                @foreach($state as $state)

        			<div class="edit-inputs__column__details__row">

        				<span class="edit-inputs__column__details__row__number">{{ $state->id}}-</span>
        				<input id="edit-inputs-format-1" class="edit-inputs__column__details__row__name" value="{{$state->name}}" disabled>
        				<label  for="edit-inputs-format-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">

                            <a  href="/states/delete/{{$state->id}}" ><svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-trash"></use>
                        </svg></a>
                        </label>

                         <span class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--remove">
                                <a>    <svg class="nav__list__item__icon">
                            <use xlink:href="images/sprite.svg#icon-pencil"></use>
                        </svg></a>

                                </span>

        			</div>
                @endforeach

        		 </div>
                <form action="{{route('store-state')}}" method="POST">
                    @csrf
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-format" class="edit-inputs__column__footer__label">New State:</label>
        			<input type="text" placeholder="Add New state" required class="edit-inputs__column__footer__input" id="name" name="name">
        			<button type="submit" class="edit-inputs__column__footer__button">Add</button>
        		</div>
                </form>
        	</div>



        	<div class="edit-inputs__column">
        		<div class="edit-inputs__column__header">
        			<span>Locations</span>
        		</div>
        		<div class="edit-inputs__column__details">
                    @foreach($location as $location)

        			<div class="edit-inputs__column__details__row">
        				<span class="edit-inputs__column__details__row__number">{{$location->id}}-</span>
        				<input id="name" class="edit-inputs__column__details__row__name" value="{{$location->name}}" disabled>
                <label  for="edit-inputs-dose-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">
                  <a  href="/locations/delete/{{$location->id}}"><svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg></a>
                </label>
        			<span class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--remove">
        				<a>	<svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg></a>
        				</span>
        			</div>
                    @endforeach
        		</div>
                <form action="{{route('store-location')}}" method="POST">
                    @csrf
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-dose" class="edit-inputs__column__footer__label">New location:</label>
        			<input type="text"  placeholder="Add New location" required class="edit-inputs__column__footer__input" id="name" name="name">



                    <label for="state_id"  class="edit-inputs__column__footer__label" >state:</label>
                    <select class="edit-inputs__column__footer__input" name="state_id" required>
                        <option  class="product__form__input__options" value=""></option>
                              @foreach($state as $id => $name)
                         <option  class="product__form__input__options" value="{{$id}}">{{$state->name}}</option>
                        @endforeach
                        </select>



        			<button type="submit" class="edit-inputs__column__footer__button">Add</button>
        	</div>
                </form>
    	</div>



        </div>
      </main>

@stop
