

(function($){

$(document).ready(function(){
	wp.customize('text', function(value){
    value.bind(function(to){
    	$('h3').text(to)
    })
	});


	wp.customize('color', function(value){
    value.bind(function(to){
    	$('h3').css('color', to)
    })
	});


	wp.customize('check', function(value){
     value.bind(function(to){
       false === to ? $('.divi').hide() : $('.divi').show();
     })
	});
})



})(jQuery);