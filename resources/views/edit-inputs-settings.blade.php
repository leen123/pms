
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

                @foreach($format as $format)

        			<div class="edit-inputs__column__details__row">

        				<span class="edit-inputs__column__details__row__number">{{ $format->id}}-</span>
        				<input id="edit-inputs-format-1" class="edit-inputs__column__details__row__name" value="{{$format->name}}" disabled>
        				<label  for="edit-inputs-format-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">

                            <a  href="/formats/delete/{{$format->id}}" ><svg class="nav__list__item__icon">
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
                <form action="{{route('store-format')}}" method="POST">
                    @csrf
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-format" class="edit-inputs__column__footer__label">New Format:</label>
        			<input type="text" placeholder="Add New Format" required class="edit-inputs__column__footer__input" id="name" name="name">
        			<button type="submit" class="edit-inputs__column__footer__button">Add</button>
        		</div>
                </form>
        	</div>


        	<div class="edit-inputs__column">
        		<div class="edit-inputs__column__header">
        			<span>Doses</span>
        		</div>
        		<div class="edit-inputs__column__details">
                    @foreach($caliber as $caliber)
        			<div class="edit-inputs__column__details__row">
        				<span class="edit-inputs__column__details__row__number">{{$caliber->id}}-</span>
        				<input id="edit-inputs-dose-1" class="edit-inputs__column__details__row__name" value="{{$caliber->name}}" disabled>
                <label  for="edit-inputs-dose-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">
                  <a  href="/calibers/delete/{{$caliber->id}}"><svg class="nav__list__item__icon">
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
                <form action="{{route('store-caliber')}}" method="POST">
                    @csrf
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-dose" class="edit-inputs__column__footer__label">New Dose:</label>
        			<input type="text"  placeholder="Add New Dose" required class="edit-inputs__column__footer__input" id="name" name="name">
        			<button type="submit" class="edit-inputs__column__footer__button">Add</button>
        		</div>
                </form>
        	</div>



        	<div class="edit-inputs__column">
        		<div class="edit-inputs__column__header">
        			<span>Categories</span>
        		</div>
        		<div class="edit-inputs__column__details">
                    @foreach($type as $type)
        			<div class="edit-inputs__column__details__row">
        				<span class="edit-inputs__column__details__row__number">{{$type->id}}-</span>
        				<input id="edit-inputs-cat-1" class="edit-inputs__column__details__row__name" value="{{$type->name}}" disabled>
                <label  for="edit-inputs-cat-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">
                <a  href="/types/delete/{{$type->id}}" > <svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg></a>
                </label>
        				<span class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--remove">
        					<svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg>
        				</span>
        			</div>
                    @endforeach
        		</div>
                <form action="{{route('store-type')}}" method="POST">
                    @csrf
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-cat" class="edit-inputs__column__footer__label">New CAT:</label>
        			<input type="text"  placeholder="Add New CAT" required class="edit-inputs__column__footer__input"  id="name" name="name">
        			<button type="submit" class="edit-inputs__column__footer__button">Add</button>
        		</div>
                </form>
        	</div>



        	<div class="edit-inputs__column">
        		<div class="edit-inputs__column__header">
        			<span>Manufacturers</span>
        		</div>
        		<div class="edit-inputs__column__details">
                    @foreach($factory as $factory)
        			<div class="edit-inputs__column__details__row">
        				<span class="edit-inputs__column__details__row__number">{{$factory->id}}-</span>
        				<input id="edit-inputs-mfr-1" class="edit-inputs__column__details__row__name" value="{{$factory->name}}" disabled>
                <label  for="edit-inputs-mfr-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">
                 <a  href="/factories/delete/{{$factory->id}}" > <svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg></a>
                </label>
        				<span class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--remove">
        				<a>	<svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg> </a>
        				</span>
        			</div>
                    @endforeach
        		</div>
                <form action="{{route('store-factory')}}" method="POST">
                    @csrf
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-mfr" class="edit-inputs__column__footer__label">New Mfr:</label>
        			<input type="text"  placeholder="Add New MFR" required class="edit-inputs__column__footer__input" id="name" name="name">
        			<button type="submit"  class="edit-inputs__column__footer__button">Add</button>
        		</div>
                </form>
        	</div>


        	<div class="edit-inputs__column">
        		<div class="edit-inputs__column__header">
        			<span>Roofs</span>
        		</div>
        		<div class="edit-inputs__column__details">
                    @foreach($shelf as $shelf)
        			<div class="edit-inputs__column__details__row">
        				<span class="edit-inputs__column__details__row__number">{{$shelf->id}}-</span>
        				<input id="edit-inputs-roof-1" class="edit-inputs__column__details__row__name" value="{{$shelf->number}}" disabled>
                <label  for="edit-inputs-roof-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">
                 <a  href="/shelves/delete/{{$shelf->id}}" > <svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg></a>
                </label>
        				<span class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--remove">
        				<a>	<svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg> </a>
        				</span>
        			</div>
                    @endforeach
        		</div>
                <form action="{{route('store-shelf')}}" method="POST">
                    @csrf
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-roof" class="edit-inputs__column__footer__label">New Roof:</label>
        			<input type="text" placeholder="Add New Roof" required class="edit-inputs__column__footer__input" id="number" name="number">
        			<button  type="submit"  class="edit-inputs__column__footer__button">Add</button>
        		</div>
                </form>
        	</div>


            <div class="edit-inputs__column">
        		<div class="edit-inputs__column__header">
        			<span>chemicalnames</span>
        		</div>
        		<div class="edit-inputs__column__details">
                    @foreach($chemicalname as $chemicalname)
        			<div class="edit-inputs__column__details__row">
        				<span class="edit-inputs__column__details__row__number">{{$chemicalname->id}}-</span>
        				<input id="edit-inputs-roof-1" class="edit-inputs__column__details__row__name" value="{{$chemicalname->name}}" disabled>
                <label  for="edit-inputs-roof-1" class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--edit">
                 <a  href="/chemicalnames/delete/{{$chemicalname->id}}" > <svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-trash"></use>
                  </svg></a>
                </label>
        				<span class="edit-inputs__column__details__row__buttons edit-inputs__column__details__row__buttons--remove">
        				<a>	<svg class="nav__list__item__icon">
                    <use xlink:href="images/sprite.svg#icon-pencil"></use>
                  </svg> </a>
        				</span>
        			</div>
                    @endforeach
        		</div>
                <form action="{{route('store-chemicalname')}}" method="POST">
                    @csrf
        		<div class="edit-inputs__column__footer">
        			<label for="add-new-roof" class="edit-inputs__column__footer__label">New chemicalname:</label>
        			<input type="text" placeholder="Add New Roof" required class="edit-inputs__column__footer__input" id="name" name="name">
        			<button  type="submit"  class="edit-inputs__column__footer__button">Add</button>
        		</div>
                </form>
        	</div>

        </div>
      </main>

@stop
