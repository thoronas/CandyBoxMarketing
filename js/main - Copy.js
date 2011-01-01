/*================================================
-Main.js Document;
================================================*/

//----------------------------------------------- Cufon

//----------------------------------------------- $(document).ready start
$(document).ready(function(){
	$("li.nav-box:last").addClass('nav-box-last');
	inputReseter($('span.email-adr input'), 'Sign up! Email address.');
	
	//Fix Errors - http://www.learningjquery.com/2009/01/quick-tip-prevent-animation-queue-buildup/
	
	//Remove outline from links
	$("a").click(function(){
		$(this).blur();
	});
	
	
	$('.contNavBoxHead').click(function(event){
		var cnUrl = $(this).find('a').attr('href');
		if((cnUrl == "#")||(cnUrl == '')){
			event.preventDefault();
		}else{
			window.location = cnUrl;
		}
	});
	
	//When mouse rolls over
	$(".contNavBox").hover(function(){
		$(this).css('cursor', 'pointer');
		if($(this).hasClass('open'))
		{
		}else{
		$(this).stop().animate({height:'155px'},800);
		$(this).css('z-index', '900');
		var showElem = $(this).find('.nav-cont-popup');
		var thisElem = $(this);
		}
		thisElem.find('.contNavBoxHead').children('a').click(function(event){
			if(thisElem.children().size()>1){
				thisElem.addClass('open');
				event.preventDefault();
			}
			showElem.show();
			thisElem.find('.contNavBoxHead').addClass('upTop');
			thisElem.css('width', showElem.width());
			thisElem.stop().animate({height: showElem.height()+153},1000);
		});
		
		thisElem.find('.popup-close').click(function(event){
			event.preventDefault();
			thisElem.stop().animate({height:'105px'},800, function(){showElem.hide(); thisElem.find('.contNavBoxHead').removeClass('upTop'); thisElem.css('width', '210px')});
			thisElem.removeClass('open');
		});
	},function(){
			if($(this).children().size() == 1)
			{
				$(this).stop().animate({height:'105px'},800);
			}else{
				if($(this).find('.nav-cont-popup').css('display') == 'none')
				{
					$(this).stop().animate({height:'105px'},800);
				}
			}
		}
	);
	
	var lich = 0;
	$('.nav-cont-popup').find('.txt-field-pop').focusin(function(){
		lich = lich + 1;
		if(lich >= 3){
			$('.nav-cont-popup').find('.popup-cont-submit').css('margin-top','24px');
		}
	});
	

		
	
		function inputReseter(jqObj, iniVal){
		$(jqObj).focus(function(){
		value = $(this).val();
		if( value == iniVal ){
		$(this).val('');
		}else{
		// user has ented input, do nothing
		}
		});
		$(jqObj).blur(function(){
		if($(this).val() === ''){
		$(this).val(iniVal);
		}else{
		// user has ented input, do nothing
		}
		});
		}
	
		$(".popup-form .popup-submit").click(function(){
			$('#exposeMask').hide();
		});
		
});


	$(function() {
		$("a.sl-more[rel]").overlay({mask: '#fff'});
	});
	$(function() {
		$(".popup-form .popup-submit[rel]").overlay({mask: '#fff'});
	});

