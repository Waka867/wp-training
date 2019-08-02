
/*(function(){
  var projectButton = document.querySelector( '.single-portfolio a.button' );
  projectButton.target = '_blank';
})();*/


//This self invoking function prevents cluttering the namespace with a dollar sign by passing in jQuery as the dollar sign, then using it within the function normally. Because the dollar sign usage is within the function, it is kept from spoiling other things by the function's scope.
(function($){
	$('.single-portfolio a.button').attr('target', '_blank');;	
})(jQuery);
