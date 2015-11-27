<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/jquery-ui-1.9.2.custom.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/jquery.mmenu.all.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/select2.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/common.css">
<style>
        .ui-datepicker {
                font-size: 85%;
        }
        #city {
                width: 150px;
        }
        #nights {
                width: 100px;
        }
        #guests {
                width: 100px;
        }

        .select2-container--default .select2-selection--single .select2-selection__placeholder {
                font-size: 12px;
        }

        .select2-container--default .select2-selection--single {
                border-radius: 2px;
        }
        .select2-results__option {
                font-size: 12px;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
                top: 10px;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
                line-height: 45px;
                font-size: 12px;
                color: #999;
        }
        .select2-container .select2-selection--single {
                height: 47px;
        }
</style>
<?php
get_header();
?>
    <!-- main area -->
    <article>
            <!-- topimg -->
            <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/top/top2.jpg" alt="">
                            <div class="top_img_tittle">
                                    Recruitment Archives
                                    <p class="top_img_dis">
                                            We have many staff who come from different countries,<br>
                                            and they enjoy their life together at Khaosan Tokyo/Kyoto Guest House.
                                    </p>
                            </div>
                    </div>
                    <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/top/top3.jpg" alt="">
                            <div class="top_img_tittle">
                                    KHAOSAN KYOTO GUESTHOUSE
                                    <p class="top_img_dis">
                                            No.3 Hostel in Asia 2013 & No.1 Hostel in Japan 2012<br>
                                            Perfect Location": 1 min from Kawaramachi Sta.<br>
                                            Convenient Access" to Major Touristic Sights<br>
                                            6 Beds Mixed/Female Dorm" Recommended<br>
                                            Tatami Living Room" and Excellent Facilities
                                    </p>
                            </div>
                    </div>
                    <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/top/top1.jpg" alt="">
                            <div class="top_img_tittle">
                                    KHAOSAN TOKYO ORIGAMI
                                    <p class="top_img_dis">
                                            Handicrafts Decorative Hostel<br>
                                            Amazing city lights ＆ panorama<br>
                                            Event gallery ＆ cozy common area<br>
                                            Japanese style private rooms recommended
                                    </p>
                            </div>
                    </div>
                    <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/top/khaosan_staff.jpg" alt="">
                            <div class="top_img_tittle">
                                    KHAOSAN TOKYOSAMURAI CAPSULE
                                    <p class="top_img_dis">
                                            CHA-SHITSU STYLE DORM FOR SAMURAI<br>
                                            Functional Capsule Style Bed<br>
                                            Gorgeous Tatami Lounge & Kitchen<br>
                                            Great location & Fabulous City View
                                    </p>
                            </div>
                    </div>
            </div>

            <!-- select -->
            <?php get_template_part( 'search-menu' );?>

            <!-- TODO:【wordpressにてホテルの追加・更新】 -->
            <!-- HOSTEL -->
            <div class="contents_title">
                    <img src="<?php echo get_template_directory_uri()?>/img/title/t_hostel.png">
            </div>
            <div class="imgbox_back">
                    <div class="imgbox_area">
                        <?php
                        $cities = get_terms( 'city','hide_empty=0' );
                        if ( ! empty( $cities ) && ! is_wp_error( $cities ) ){
                            foreach ( $cities as $city ) {
                        ?>
                                <?php
                                $hotels = get_objects_in_term( $city->term_id, 'city');
                                if ( ! empty( $hotels ) && ! is_wp_error( $hotels ) ){
                                    foreach($hotels as $hotel){
                                        $post = get_post( $hotel );
                                ?>
                                        <a href="<?php echo get_home_url()?>/?hotel=<?php echo $post->post_name?>">
                                                <div class="imgbox">
                                                        <div class="area"
                                                             style="background:
                                                                <?php
                                                                    if($city->name == 'KYOTO') echo "#8C8C00";
                                                                    else if($city->name == 'SAPPORO') echo "#003366"; 
                                                                    else if($city->name == 'ATAMI') echo "#D96D00"; 
                                                                    else if($city->name == 'KANAZAWA') echo "#004D14"; 
                                                                    else echo "#ff4d4d";
                                                                ?>"
                                                        >
                                                            <?php echo $city->name ?>
                                                        </div>
                                                        <?php
                                                        $eye_catch = get_post_meta ( $hotel,'hotel_eye_catch', true);
                                                        ?>                                                        
                                                        <img src="<?php echo $eye_catch[1][1];?>">
                                                        <?php
                                                        $services = get_post_meta ( $hotel,'hotel_service', true);
                                                        if($services != ''){
                                                            echo '<div class="icon" style="bottom:-3px">';
                                                            foreach($services[1][1] as $service){
                                                                echo '<img style="width:49px" src="'.  get_home_url().'/'.$service.'">';
                                                            }
                                                            echo '</div>';
                                                        }
                                                        ?>
                                                        <div class="hostel_name">
                                                            <?php
                                                            $hotel_name = get_post_meta ( $hotel,'hotel_name', true);
                                                            echo $hotel_name[1][1];
                                                            ?>
                                                        </div>
                                                </div>
                                        </a>
                                <?php
                                    }
                                }
                                ?>
                        <?php
                            }
                        }
                        ?> 
                    </div>
            </div>

            <!-- MAP -->
            <div class="map">
                    <!--
                    <div class="contents_title"><img src="<?php echo get_template_directory_uri()?>/img/title/t_map.png"></div>
                    -->
                    <div id="map_canvas">Loading...</div>
                    <ul>
                            <li>
                                    TOKYO
                                    <ul>
                                            <li><a href="javascript:map_click(0)">KHAOSAN TOKYOSAMURAI CAPSULE</a></li>
                                            <li><a href="javascript:map_click(1)">KHAOSAN TOKYO ORIGAMI</a></li>
                                            <li><a href="javascript:map_click(2)">KHAOSAN WORLD ASAKUSA</a></li>
                                            <li><a href="javascript:map_click(3)">KHAOSAN TOKYO LABORATORY</a></li>
                                            <li><a href="javascript:map_click(4)">KHAOSAN TOKYO KABUKI</a></li>
                                            <li><a href="javascript:map_click(5)">KHAOSAN TOKYO ORIGINAL</a></li>
                                    </ul>
                            </li>
                            <li>
                                    KYOTO
                                    <ul>
                                            <li><a href="javascript:map_click(6)">KHAOSAN KYOTO THEATER</a></li>
                                            <li><a href="javascript:map_click(7)">KHAOSAN KYOTO GUESTHOUSE</a></li>
                                    </ul>
                            </li>
                            <li>
                                    SAPPORO
                                    <ul>
                                            <li><a href="javascript:map_click(8)">INTERNATIONAL HOSTEL KHAOSAN SAPPORO</a></li>
                                    </ul>
                            </li>
                    </ul>
                    <div class="map_text">
                            <strong>Airport =============== TOKYO/ASAKUSA</strong><br>
                            <br>
                            [To/From Narita Airport]<br>
                            Direct train: 1,240Yen / 60min<br>
                            Airport Limousine: 2,700JPY / 60-120min<br>
                            * 1-minute walk to a bus stop from our ryokan/hostel<br>
                            * 2 buses/day to each directions<br>
                            <br>
                            [To/From Haneda Airport]<br>
                            Direct train: 640Yen / 40min<br>
                            Airport Limousine: 900JPY / 20-65min<br>
                            * 1-minute walk to a bus stop from our ryokan/hostel
                    </div>
                    <div class="map_arrow">▲</div>
            </div>

            <!-- NEWS -->
            <?php get_template_part( 'news' );?>
            <!-- other -->
            <?php get_template_part( 'other' );?>
    </article>
<?php
get_footer();
?>
<!-- js -->
<script src="<?php echo get_template_directory_uri()?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.mmenu.min.all.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/owl.carousel.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?php echo get_template_directory_uri()?>/js/googlemaps3.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/select2.full.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>
<script>
        google.maps.event.addDomListener(window, "load", inicializar("<?php echo get_template_directory_uri()?>"));
        
        $(function () {
                // カルーセル
                $("#owl-demo").owlCarousel({
                        navigation: true,		// Show next and prev buttons
                        slideSpeed: 300,		// ページ送りした時のスライドスピード
                        paginationSpeed: 800,	// 自動のスライドスピード
                        singleItem: true,		// アイテムを1つにする
                        autoPlay: 5000,			// 自動でスライドするスピード。例：5000の場合、5秒
                });

                // GoogleMap
                $("#map-canvas").on("load", function () {
                        initialize();
                });

                // カレンダー
                $("#check-in").datepicker();
                $("#check-out").datepicker();

                //
//			$("#city").change(function () {
//			if($(this).val() == "") $(this).addClass("place");
//			else $(this).removeClass("city")
//			});
//			$("#city").change();

                // 都市
                $("#city").select2({
                        minimumResultsForSearch: Infinity,
                });

                // 宿泊数
                $("#nights").select2({
                        minimumResultsForSearch: Infinity,
                        placeholder: "Nights"
                });

                // 人数
                $("#guests").select2({
                        minimumResultsForSearch: Infinity,
                        placeholder: "Guests"
                });

                // 通貨
                $("#currency").select2({
                        minimumResultsForSearch: Infinity,
                        placeholder: "Currency"
                });
        });
</script>