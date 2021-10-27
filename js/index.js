//var estado=0;
$('ul li').on('click', function() {
	$('li').removeClass('active');
	$(this).addClass('active');
});
/*
$('.navbar-toggler').on('click',function(){
   

   console.log(estado);
    if(estado==0){
    $('.navbar-brand').addClass('hide');
    $('.navbar-nav').removeClass('ml');
     $('.navbar-nav').addClass('m0');
    estado=1;
    }else{
   estado=0;
        $('.navbar-brand').removeClass('hide');
          $('.navbar-nav').removeClass('m0');
        $('.navbar-nav').addClass('ml'); 
     
    }
});*/