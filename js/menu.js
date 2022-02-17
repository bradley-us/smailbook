$(document).ready(menu);   
    
var contador = 1;

function menu () {
	$('.btn-menu').click(function(){
		// $('nav').toggle(); 
 
		if(contador == 1){
			$('.nav-header').animate({
				right: '-11'
			});
			contador = 0;
            
		} else {
			contador = 1;
			$('.nav-header').animate({
                right: '-100%'
			});
		}
 
	});
    
    //Mostramos y ocultamos submenus
    $('.submenu').click(function(){
        $(this).children('.children').slideToggle();
    });
};






function openWindow(){
        $('.window').slideToggle('fast');
    }

function closeWindow(){
        $('.window').slideUp('fast');
    }

function openWindowLed1(){
        $('.window-led1').slideToggle('fast');
    }

function closeWindowLed1(){
        $('.window-led1').slideUp('fast');
    }

function openWindowLed2(){
        $('.window-led2').slideToggle('fast');
    }

function closeWindowLed2(){
        $('.window-led2').slideUp('fast');
    }

function openWindowLed3(){
        $('.window-led3').slideToggle('fast');
    }

function closeWindowLed3(){
        $('.window-led3').slideUp('fast');
    }