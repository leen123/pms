//To open and close the side navigation
const open_btn = document.querySelector('.nav__btn--open')
const close_btn = document.querySelector('.nav__btn--close')
const nav = document.querySelectorAll('.nav__slider')
const body = document.querySelector('.body')

open_btn.addEventListener('click', () =>{
	nav.forEach(nav__slider_el => nav__slider_el.classList.add('visible'))
})

close_btn.addEventListener('click', () =>{
	nav.forEach(nav__slider_el => nav__slider_el.classList.remove('visible'))
})

document.onclick = function(e){
	if(e.target.id != 'open-btn' && e.target.id != 'on-nav'){
		$('.nav__slider--black').removeClass('visible');
		$('.nav__slider--green').removeClass('visible');
		$('.nav__slider--black').removeClass('visible');
	}
}


//to show the description of a medicine when pressed on card
const panels = document.querySelectorAll('.search-result__description__details');
panels.forEach( (panel) => {
	panel.addEventListener('click', () => {
		removeActiveClasses()
		panel.classList.add('search-result__description__details--active');
	})
})

function removeActiveClasses() {
	panels.forEach( (panel) => {
		panel.classList.remove('search-result__description__details--active');
	})
}

//sub-nav--first
$(document).ready(function(){
    //jquery for toggle sub menus
    $('.nav__list__item__link--sub--first').click(function(){
      $(this).next('.nav__sub-list--first').slideToggle(); //to slide the sub-nav
      $(this).toggleClass('nav__list__item__link--sub--active--first');//to highlight the sub menu title
      $('.nav__list__item__icon--dropdown--first').toggleClass('nav__list__item__icon--dropdown--rotated');//to rotate the arrow
      $('#sub-nav-title').toggleClass('nav__list__item--sub--first');//to make the before transparent
    });
});
//sub-nav--second
$(document).ready(function(){
    //jquery for toggle sub menus
    $('.nav__list__item__link--sub--second').click(function(){
      $(this).next('.nav__sub-list--second').slideToggle(); //to slide the sub-nav
      $(this).toggleClass('nav__list__item__link--sub--active--second');//to highlight the sub menu title
      $('.nav__list__item__icon--dropdown--second').toggleClass('nav__list__item__icon--dropdown--rotated');//to rotate the arrow
      $('#sub-nav-title-2').toggleClass('nav__list__item--sub--second');//to make the before transparent
    });
});