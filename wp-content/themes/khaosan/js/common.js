$(function () {
        $('.lang-menu').click(function(){
                if(!$('.sub-menu').attr("style")){
                    $('.sub-menu').css({'opacity':'1','visibility':'visible'});
                }else {
                    $('.sub-menu').removeAttr("style");
                }
        }); 
	$("#toggle .toggle").on("click", function () {
		$(this).next().slideToggle(300);
	});

	$("#menu").mmenu();

	var topBtn = $("#page-top");
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 500) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	
	topBtn.click(function () {
		$("html, body").animate({
			scrollTop: 0
		}, 500);
		return false;
	});

});