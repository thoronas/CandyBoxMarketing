$(function() {
	$("a.toPopForm[href]").overlay({mask: '#fff'});
});
function getCookie(name) {
	var cookie = " " + document.cookie;
	var search = " " + name + "=";
	var setStr = null;
	var offset = 0;
	var end = 0;
	if (cookie.length > 0) {
		offset = cookie.indexOf(search);
		if (offset != -1) {
			offset += search.length;
			end = cookie.indexOf(";", offset)
			if (end == -1) {
				end = cookie.length;
			}
			setStr = unescape(cookie.substring(offset, end));
		}
	}
	return(setStr);
}

function setCookie (name, value) {
      document.cookie = name + "=" + escape(value);
}

$(document).ready(function(){
		$("ul.social-btm-links li:last-child").addClass('social-last');
		$(".recent-post:first").addClass('recent-post-first');
		inputReseter($('.blog-form-webs span input'), 'http://');
		
		
		
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




		$(".faceImgBox").hover(function() {
			$(this).css({'z-index' : '10'}); /*Add a higher z-index value so this image stays on top*/ 
			$(this).find('img').addClass("hover").stop() /* Add class of "hover", then stop animation queue buildup*/
				.animate({
					marginTop: '-180px', /* The next 4 lines will vertically align this image */ 
					marginLeft: '-180px',
					top: '50%',
					left: '50%',
					width: '367px', /* Set new width */
					height: '367px' /* Set new height */
				}, 200); /* this value of "200" is the speed of how fast/slow this hover animates */
		
			} , function() {
			$(this).css({'z-index' : '0'}); /* Set z-index back to 0 */
			$(this).find('img').removeClass("hover").stop()  /* Remove the "hover" class , then stop animation queue buildup*/
				.animate({
					marginTop: '0', /* Set alignment back to default */
					marginLeft: '0',
					top: '9',
					left: '9',
					width: '245px', /* Set width back to default */
					height: '245px' /* Set height back to default */
				}, 400);
		});
		
		var maxHeightGB = 0;
		if(maxHeightGB <= $('.googleBlk').height()){maxHeightGB = $('.googleBlk').height();}
		
		if(maxHeightGB <= $('.googleInfobox').height()){maxHeightGB = $('.googleInfobox').height();}
		if(maxHeightGB <= $('.facebookInfobox').height()){maxHeightGB = $('.facebookInfobox').height();}
		if(maxHeightGB <= $('.facebookBlk').height()){maxHeightGB = $('.facebookBlk').height();}
		$('#googleFacebook').css('height', maxHeightGB);
		$('.gfInfoCont').css('min-height', maxHeightGB-40);
		var Infobox = '';
		var InfoboxOld = '';
		
		$('.cnBox-3').click(function(){
			if(getCookie('facebook')){setCookie ('facebook', '');}
			setCookie ('google', 'google');
		});
		$('.cnBox-1').click(function(){
			if(getCookie('google')){setCookie ('google', '');}
			setCookie ('facebook', 'facebook');
		});	
		
		var cookieGoogle = getCookie('google');
		var cookieFacebook = getCookie('facebook');
		if(cookieGoogle == 'google'){
			$('#googleFacebook').addClass('openBoxes');
			$('.googleBlk').css('left', '-30px');
			$('.outBox').show();
			$('.googleInfobox ').show();
			$('.facebookBlk').css('right', '-30px');
			InfoboxOld = $('.googleInfobox');
			Infobox = $('.googleInfobox');
			setCookie ('google', '');
		}
		
		if(cookieFacebook == 'facebook'){
			$('#googleFacebook').addClass('openBoxes');
			$('.googleBlk').css('left', '-30px');
			$('.outBox').show();
			$('.facebookInfobox ').show();
			$('.facebookBlk').css('right', '-30px');
			InfoboxOld = $('.facebookInfobox');
			Infobox = $('.facebookInfobox');
			setCookie ('facebook', '');
		}
		
		$('.gF-Box').click(function(){
			if(Infobox == '')
			{
			}else{
				if($(this).parent().hasClass('googleBlk')){
					Infobox = $('.googleInfobox');
				}else{
					Infobox = $('.facebookInfobox');
				}
			}
			
			if((InfoboxOld == Infobox)||(InfoboxOld.attr('class') == Infobox.attr('class'))){
				if($(this).parent().hasClass('googleBlk')){
					Infobox = $('.googleInfobox');
				}else{
					Infobox = $('.facebookInfobox');
				}
				if($('#googleFacebook').hasClass('openBoxes')){
				$('#googleFacebook').removeClass('openBoxes')
				$('.gfInfoBox').fadeOut(400);
				$('.outBox').hide();
				Infobox = '';
				InfoboxOld = '';
				$('.googleBlk').animate({
					left: '140px'
				}, 2000, function() {
					
			  });
				$('.facebookBlk').animate({
						right: '143px'
					}, 2000, function() {
				});
			}else{
				$('#googleFacebook').addClass('openBoxes')
				$('.googleBlk').animate({
					left: '-30px'
				}, 2000, function() {
					Infobox.fadeIn(400, function(){$('.outBox').show()});
			  });
				$('.facebookBlk').animate({
						right: '-30px'
					}, 2000, function() {
						Infobox.fadeIn(400, function(){$('.outBox').show()});
				});
			}
			}else{
				InfoboxOld.fadeOut(400);
				Infobox.fadeIn(400);
			}
			
			InfoboxOld = Infobox;
			
		});
		
		/*----------nav hover -----------------*/
		
		var saveTitle = '';
		$('.index-header #navigation > li.toFlyOut').hover(function(){
			var popTxt = '';
			saveTitle = $(this).children('a').attr('title');;
			var popupElem = $('<div class="nav-popup"><div class="nav-popup-blk"><div class="nav-popup-wrap"><div class="nav-popup-cont"></div></div></div></div>');
			var leftMove = ($(this).width()/2) - 100;
			
			if($(this).children('a').attr('title') != '')
			{
			popTxt = '<p>' + $(this).children('a').attr('title')+'</p>';
			$(this).children('a').attr('title', '');
			popupElem.appendTo($(this));
			$(this).find('.nav-popup').css('left', leftMove);
			$(popTxt).appendTo($(this).find('.nav-popup-cont'));
			}
		},function(){
			$(this).find('.nav-popup').remove();
			$(this).children('a').attr('title', saveTitle);
		}
		);
		
		$('#navigation li').hover(function(){
			if($(this).hasClass('current')){
			$(this).find('img').first().hide();
			$(this).find('img').last().show();
		  }else{
			$(this).find('img').first().hide();
			$(this).find('img').last().show();
			}
		},function(){
			if($(this).hasClass('current')){
			$(this).find('img').first().hide();
			$(this).find('img').last().show();
		  }else{
			$(this).find('img').first().show();
			$(this).find('img').last().hide();
			}
		});
		

		if($('#header').hasClass('index-header')){
			$('.logo a').css('cursor', 'default');
			$('.logo a').click(function(event){
				event.preventDefault();
			})
		}
		
		
		
				
		
});

$(function() {
	$('#navigation li a').each(function(){
			$(this).children().first().show();
			$(this).children().last().hide();
			if($(this).parent().hasClass('current')){
			$(this).children().first().hide();
			$(this).children().last().show();
		  }
		});
});
//window.onload = function() {
		//var bootBlkWidth = 0; 
	//	$('.bootBlk ul li').last().css('padding', '0px');
	//	$('.bootBlk ul li').each(function(){
		//	bootBlkWidth = bootBlkWidth + $(this).width() + 20;
	//	});
		
		//$('.bootBlk ul').css('width', bootBlkWidth);	
//};

















