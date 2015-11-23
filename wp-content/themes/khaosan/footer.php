            <!-- page-top -->
            <p id="page-top">
                    <a href="#">▲</a>
            </p>
        </div>
    <footer>
      <div class="footer_contents">
        <div class="footer_menu">
          <a href="#">
            <p>HOSTELS
            </p>
          </a>
          <a href="#">
            <p>BLOG
            </p>
          </a>
          <a href="#">
            <p>STAFF
            </p>
          </a>
          <a href="#">
            <p>CONTACT
            </p>
          </a>
        </div>
        <div class="footer_sns">
          <p>ソーシャルメディア 
          </p>
          <a href="#">
            <img src="<?php echo get_template_directory_uri()?>/img/menu/facebook.png">
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri()?>/img/menu/twitter.png">
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri()?>/img/menu/google_plus.png">
          </a>
          <a href="#">
            <img src="<?php echo get_template_directory_uri()?>/img/menu/pin.png">
          </a>
        </div>
      </div>
      <address>&#169; Khaosan Tokyo Hostel, Cheapest Hostel in Central Tokyo</address>
    </footer>
    <?php wp_footer(); ?>
</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/googlemaps3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.mmenu.min.all.js"></script>
<script>
    function demo01() {
    $(this).next().slideToggle(300);
    }

    $(".toggle").click(demo01);
</script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true, // Show next and prev buttons
            slideSpeed : 300,//ページ送りした時のスライドスピード
            paginationSpeed : 800,//自動のスライドスピード
            singleItem:true,//アイテムを1つにする
            autoPlay: 5000,//自動でスライドするスピード。例：5000の場合、5秒
        });

    });
</script>
<script>
     google.maps.event.addDomListener(window, "load", inicializar("<?php echo get_template_directory_uri()?>"));
</script>
<script>
    $.fn.cycle.defaults.autoSelector = '.slideshow';
</script>
<script type="text/javascript">
        $(function() {
    $('nav#menu').mmenu();
});
</script>
<!-- ページトップJS -->
<script type="text/javascript">
  $(function() {
    var topBtn = $('#page-top');  
    topBtn.hide();
  $(window).scroll(function () {
  if ($(this).scrollTop() > 500) {
    topBtn.fadeIn();
  } else {
    topBtn.fadeOut();
  }
  });
//スクロールしてトップ
topBtn.click(function () {
$('body,html').animate({
  scrollTop: 0
}, 500);
return false;
});
});
</script>
</html>