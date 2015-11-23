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
        <?php get_template_part( 'other' );?>
        <!-- NEWS -->
        <?php get_template_part( 'news' );?>
<?php
get_footer();
?>