$(function() {
	function demo01() {
		alert(1);
		$(this).next().slideToggle(300);
		alert(1);
	}

	$(".simple .toggle").click(demo01);



	function demo02() {
		$(this).toggleClass("active").next().slideToggle(300);
	}

	$(".switch .toggle").click(demo02);
});