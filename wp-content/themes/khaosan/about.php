<?php
/**
 * Template Name: about
 */
get_header();
?>
    <article>
        <!-- topimg -->
        <div class="flickSlider">
 
			<div class="flickView">
				<ul>
					<li><a href="#1"><img src="<?php echo get_template_directory_uri()?>/img/top/about_top.jpg" alt=""></a></li>
				</ul>
			</div><!--/.flickView-->
		</div><!--/.flickSlider-->


		<div id="hostel_tittle">
			<div class="tittle_text">
                <p>about</p>
            </div>
            
		</div>
       


        <div id="content">
        <!-- menu area -->
        <nav class="hostel">
            <!-- menu area -->
            <div class="menu_area">
            <div class="arrow" style="top: 22px; left: 12px;">
                <img src="<?php echo get_template_directory_uri()?>/img/menu/hostel/arrow.png">
            </div>
                <ul>
                    <li><img src="<?php echo get_template_directory_uri()?>/img/menu/hostel/top.png">Company Profile</li>
                    <li><img src="<?php echo get_template_directory_uri()?>/img/menu/hostel/facilities.png">Greeting</li>
                </ul>
            </div>
        </nav>



        <!-- content -->
            <div class="detail">

                <div class="detail_tittle">
                Concept
                </div>
                <div class="detail_text">
                ******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************
                </div>
                <div class="detail_tittle">
                Service
                </div>

                <div class="detail_text">
                * フリーwifi<br>
                * 共用パソコン<br>
                * 共用ランドリー<br>
                * 共用キッチン<br>
                * 図書館（漫画ルーム）<br>
                * レンタカー<br>
                * クレジットカード利用可能（未定）<br>
                </div>

                <div class="detail_tittle">
                Location
                </div>
                <div class="detail_text">
                [To/From near stations]<br>
                Asakusa Station (Tsukuba Express Line): 1-minute walk<br>
                Asakusa Station (Metro Ginza Line): 10-minute walk<br>
                Asakusa Station (Toei Asakusa Line): 12-minute walk<br>
                    * For direct trains to/from Narita and Haneda airport<br><br>
                [To/From Narita Airport]<br>
                Direct train: 1,240Yen / 60min<br>
                Airport Limousine: 2,700JPY / 60-120min<br>
                    * 1-minute walk to a bus stop from our ryokan/hostel<br>
                    * 2 buses/day to each directions<br><br>
                [To/From Haneda Airport]<br>
                Direct train: 640Yen / 40min<br>
                Airport Limousine: 900JPY / 20-65min<br>
                    * 1-minute walk to a bus stop from our ryokan/hostel<br>
                </div>

                <div class="detail_tittle">
                Opening Hours
                </div>
                <div class="detail_text">
                * Business Hours: 08:00 - 21:00<br>
                * Check in time: 15:00 - 21:00<br>
                * Check out time: by 11:00 am<br>
                * Free Luggage Keeping: 08:00 (on the day of check in) - 20:00 (on the day of check out)<br><br>
                + Arrangements can be made for early check-out and late check-in. Informing us in advance is preferable.<br>
                + We adhere to the check-in time since we would like to secure our cleaning time: 11:00 - 15:00.
                </div>
            </div>
        </div>

        <!-- other -->
        <div class="other_area">
        <div class="other">
        	<div class="other_img"><img src="<?php echo get_template_directory_uri()?>/img/other/sim.jpg"></div>
        	<div class="other_img"><img src="<?php echo get_template_directory_uri()?>/img/other/wifi.jpg"></div>
        	<div class="other_img"><img src="<?php echo get_template_directory_uri()?>/img/other/recruitment.jpg"></div>
        	<div class="other_img"><img src="<?php echo get_template_directory_uri()?>/img/other/sim.jpg"></div>
        </div>
        </div>

        <!-- NEWS -->
        <div class="contents_title">
        	<img src="<?php echo get_template_directory_uri()?>/img/title/t_news.png">
        </div>

        <div class="news_area">
        	<div class="news_box">

        	<!-- ニュースここから -->
        	<div class="news">
        	<div class="news_date">2015/10/10</div>
        	<div class="news_title">Todays KHAOSAN!</div>
        	<div class="content">
        		<p>****************************************************************************************************************<br>****************************************************************************************************************<br>****************************************************************************************************************
        		</p>
        	</div>
        	</div>
        	<!-- ニュースここまで -->

        	<!-- ニュースここから -->
        	<div class="news">
        	<div class="news_date">2015/10/4</div>
        	<div class="news_title">Hello KHAOSAN!</div>
        	<div class="content">
        		<p>****************************************************************************************************************<br>****************************************************************************************************************<br>****************************************************************************************************************
        		</p>
        	</div>
        	</div>
        	<!-- ニュースここまで -->

        	<!-- ニュースここから -->
        	<div class="news">
        	<div class="news_date">2015/9/24</div>
        	<div class="news_title">Hello KHAOSAN!</div>
        	<div class="content">
        		<p>****************************************************************************************************************<br>****************************************************************************************************************<br>****************************************************************************************************************
        		</p>
        	</div>
        	</div>
        	<!-- ニュースここまで -->

        	<!-- ニュースここから -->
        	<div class="news">
        	<div class="news_date">2015/9/24</div>
        	<div class="news_title">Hello KHAOSAN!</div>
        	<div class="content">
        		<p>****************************************************************************************************************<br>****************************************************************************************************************<br>****************************************************************************************************************
        		</p>
        	</div>
        	</div>
        	<!-- ニュースここまで -->

        </div>
        </div>

     		<!-- page-top -->
      		<p id="page-top">
      			<a href="#all">▲</a>
     		</p>
                
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/accordion.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/flickslider.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.mmenu.min.all.js"></script>
<!-- メニューJS -->
    <script type="text/javascript">
            $(function() {
                    $('nav#menu').mmenu();
            });
    </script>

<script>
            function demo01() {
                    $(this).next().slideToggle(300);
            }
            $(".toggle").click(demo01);
    </script>

    <script>
            $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                            navigation : true,		// Show next and prev buttons
                            slideSpeed : 300,		// ページ送りした時のスライドスピード
                            paginationSpeed : 800,	// 自動のスライドスピード
                            singleItem:true,		// アイテムを1つにする
                            autoPlay: 5000,			// 自動でスライドするスピード。例：5000の場合、5秒
                    });
            });
    </script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>

    <script>
            function demo01() {
                    $(this).next().slideToggle(300);
            }
            $(".toggle").click(demo01);
    </script>

    <script>
            $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                            navigation : true,		// Show next and prev buttons
                            slideSpeed : 300,		// ページ送りした時のスライドスピード
                            paginationSpeed : 800,	// 自動のスライドスピード
                            singleItem:true,		// アイテムを1つにする
                            autoPlay: 5000,			// 自動でスライドするスピード。例：5000の場合、5秒
                    });
            });
    </script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>

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
<?php
get_footer();
?>