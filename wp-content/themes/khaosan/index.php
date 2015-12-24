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
                <?php
                $top = get_posts(array('post_type' => 'top'));
                $map_text = get_post_meta ($top[0]->ID,'map_text', true);
                $slide_images = get_post_meta ($top[0]->ID,'slide_image', true);
                $slide_images_title = get_post_meta ($top[0]->ID,'slide_image_title', true);
                $slide_images_description = get_post_meta ($top[0]->ID,'slide_image_description', true);
                $slide_images_link = get_post_meta ($top[0]->ID,'slide_image_link', true);
                $hotel_icon_background_color = get_post_meta ($top[0]->ID,'hotel_icon_background_color', true);
                $count = count($slide_images);
                for($i = 1;$i<=$count;$i++){
                    echo    
                    '<a href="'.$slide_images_link[$i][1].'" target="_blank">
                        <div class="item">
                            <img src="'.$slide_images[$i][1].'" alt="">
                                <div class="top_img_tittle">
                                    '.$slide_images_title[$i][1].'
                                    <p class="top_img_dis">
                                        '.$slide_images_description[$i][1].'
                                    </p>
                                </div>
                        </div>
                    </a>';
                }
                ?>
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
                        if ( ! empty( $global_cities )){
                            $i = 0;
                            foreach ( $global_cities as $city ) {
                                $custom_hotels[$i] = $global_hotels[$i];
                                if ( ! empty( $global_hotels[$i])){
                                    foreach($global_hotels[$i] as $key => $post){
                                ?>
                                        <a href="<?php echo get_home_url()?>/?hotel=<?php echo $post->post_name?>">
                                                <div class="imgbox">
                                                        <div class="area"
                                                             style="background:
                                                                <?php
                                                                    echo $city->description;
                                                                ?>"
                                                        >
                                                            <?php echo $city->name ?>
                                                        </div>
                                                        <?php
                                                        $eye_catch = get_post_meta ( $post->ID,'hotel_eye_catch', true);
                                                        $custom_hotels[$i][$key]->eye_catch = $eye_catch[1][1];
                                                        $latitude = get_post_meta ( $post->ID,'hotel_latitude', true);
                                                        $custom_hotels[$i][$key]->latitude = $latitude[1][1];
                                                        $longitude = get_post_meta ( $post->ID,'hotel_longitude', true);
                                                        $custom_hotels[$i][$key]->longitude = $longitude[1][1];
                                                        $custom_hotels[$i][$key]->map_text = $map_text[1][1];
                                                        ?>                                                        
                                                        <img style= "height:100%" src="<?php echo $eye_catch[1][1];?>">
                                                        <?php
                                                        $services = get_post_meta ( $post->ID,'hotel_service', true);
                                                        if($services != ''){
                                                            echo '<div class="icon">';
                                                            foreach($services[1][1] as $service){
                                                                $style = '';
                                                                if($hotel_icon_background_color[1][1]!=''){
                                                                    $style.= 'background:'.$hotel_icon_background_color[1][1];
                                                                }
                                                                echo '<img style = "'.$style.'" src="'.  get_home_url().'/'.$service.'">';
                                                            }
                                                            echo '</div>';
                                                        }
                                                        ?>
                                                        <div class="hostel_name">
                                                            <?php
                                                            $hotel_name = get_post_meta ( $post->ID,'hotel_name', true);
                                                            echo $hotel_name[1][1];
                                                            ?>
                                                        </div>
                                                </div>
                                        </a>
                                <?php
                                    }
                                }
                                $i++;
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
                        <?php
                        $count = 0;
                        foreach($global_cities as $i => $city){
                            echo '<li>';
                                echo $city->name;
                                echo '<ul>';
                                if(!empty($custom_hotels[$i])){
                                    foreach($custom_hotels[$i] as $key => $hotel){
                                        echo '<li><a href="javascript:map_click('.$count.')">'.$hotel->post_title.'</a></li>';
                                        $count++;
                                    }
                                }
                                echo '</ul>';
                            echo '</li>';
                        }
                        ?>
                    </ul>
                    <div class="map_text">
                        <?php echo $map_text[1][1];?>
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
        cities = <?php echo json_encode($global_cities);?>;
        hotels = <?php echo json_encode($custom_hotels);?>;
        google.maps.event.addDomListener(window, "load", inicializar("<?php echo get_home_url();?>",cities,hotels));
        
        $(function () {
                // カルーセル
                $("#owl-demo").owlCarousel({
                        navigation: true,		// Show next and prev buttons
                        navigationText: ["<", ">"],
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