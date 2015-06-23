$( document ).ready(function() {
	$(".story-cover-arrow").click(function() { $('html, body').animate({ scrollTop: window.innerHeight}, 500);});
	
	$('#primary .blog').each(function(){

		$(".blog").css("margin-top",window.innerHeight + 25 + "px");

	});

	$(".story-navigation .previous").css("margin-left",-125);

  	$(".story-navigation .next").css("margin-right",-125);

	$("#headerNav .previous").css("top",(window.innerHeight)/2 - 125 + "px");

	$("#headerNav .next").css("top",(window.innerHeight)/2 - 125 + "px");

	$('.tint').find('img').each(function(){

 		 var imgClass = (this.width/this.height > 1) ? 'wide' : 'tall';

 		 $(this).addClass(imgClass);

 	})

	$('.tint img').each(function(){

    		 //get img dimensions

    		 var w = $(this).width();



   		 //get div dimensions

		 var div_w =$('.tint').width();



    		 //set img position

   		 this.style.left = '50%';

   		 this.style.marginLeft = Math.round((div_w-w)/2) + 'px';

	});

});

$(window).load(function(){

 $('.tint').find('img').each(function(){

  var imgClass = (this.width/this.height > 1) ? 'wide' : 'tall';

  $(this).addClass(imgClass);

 })

})

$(window).scroll(function(e) {

 var body = document.body,

    html = document.documentElement;



 var height = Math.max( body.scrollHeight, body.offsetHeight, 

                       html.clientHeight, html.scrollHeight, html.offsetHeight );



 if($(window).scrollTop() < window.innerHeight/2+125 ||  $(window).scrollTop() > height - window.innerHeight - (500-window.innerHeight)-window.innerHeight*0.5 -125) {

  $(".story-navigation .previous").css("margin-left",-125);

  $(".story-navigation .next").css("margin-right",-125);

 } else {

   $(".story-navigation .previous").css("margin-left",0);

   $(".story-navigation .next").css("margin-right",0);

 }

});

$( window ).resize(function() {

	$('#primary .blog').each(function(){

		$(".blog").css("margin-top",window.innerHeight + 25 + "px");

	});

	$('.tint').find('img').each(function(){

  		var imgClass = (this.width/this.height > 1) ? 'wide' : 'tall';

  		$(this).addClass(imgClass);

 	})

	$("#headerNav .previous").css("top",(window.innerHeight)/2 - 125 + "px");

	$("#headerNav .next").css("top",(window.innerHeight)/2 - 125 + "px");

});