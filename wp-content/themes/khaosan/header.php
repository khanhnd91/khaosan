<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3123575-1', 'auto');
  ga('send', 'pageview');

</script>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
        <meta name="viewport" content="width=device-width, user-scalable=no" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <!-- SEO -->
        <meta name="description" content="カオサン東京ゲストハウス【格安バックパッカーズホステル】東京、京都、福岡、別府">
        <meta name="keywords" content="カオサン,東京,福岡,京都,別府,九州,温泉,ゲストハウス,格安,安宿,安い宿,バックパッカー,ホステル,予約,ドミトリー,Cheapest, Tokyo, hostel, Backpacker, Booking, Accommodations, Dormitories">
        <meta name="Robots" content="index,follow">
            <meta name="distribution" content="global">
            <meta name="Identifier-URL" content="http://www.khaosan-tokyo.com/ja">
            <meta name="resource-type" content="document">
            <meta name="rating" content="Worldwide">
        <meta name="author" content="khaosan Guest House">
        <meta name="copyright" content="khaosan Guest House">
	<?php wp_head(); ?>
    <script src='http://code.jquery.com/jquery-1.11.1.min.js'></script>
</head>
<?php
    //create global available
    global $global_cities;
    global $global_hotels;
    $global_cities = get_terms( 'city',array('hide_empty' => false, 'orderby' => 'slug') );
    if ( ! empty( $global_cities ) && ! is_wp_error( $global_cities ) ){
        $i = 0;
        foreach ( $global_cities as $city ) {
            $hotels = get_objects_in_term( $city->term_id, 'city');
            if ( ! empty( $hotels ) && ! is_wp_error( $hotels ) ){
                $k = 0;
                foreach($hotels as $hotel){
                    $global_hotels[$i][$k] = get_post( $hotel );
                    $k++;
                }
            }
            if(!empty($global_hotels[$i])){
                foreach ($global_hotels[$i] as $key => $item)
                {
                    $post_title[$key] = $item->post_title;
                    $order = get_post_meta ( $item->ID,'hotel_order', true);
                    $hotel_order[$key] = $order[1][1];
                }
                array_multisort($hotel_order, $global_hotels[$i]);
                unset($hotel_order);
            }
            $i++;
        }
    }
    $recent_post = wp_get_recent_posts(array('numberposts' => 1,'post_status' => 'publish'));
    $top = get_posts(array('post_type' => 'top'));
    $about_link = get_post_meta ($top[0]->ID,'about_link', true);
    $staff_link = get_post_meta ($top[0]->ID,'staff_link', true);
    $qa_link = get_post_meta ($top[0]->ID,'qa_link', true);
    $recruitment_link = get_post_meta ($top[0]->ID,'recruitment_link', true);
    $car_rental_link = get_post_meta ($top[0]->ID,'car_rental_link', true);
    $fb_link = get_post_meta ($top[0]->ID,'fb_link', true);
    $twitter_link = get_post_meta ($top[0]->ID,'twitter_link', true);
    $google_plus_link = get_post_meta ($top[0]->ID,'google_plus_link', true);
    $pin_link = get_post_meta ($top[0]->ID,'pin_link', true);
    $background_image = get_post_meta ($top[0]->ID,'background_image', true);
?>
    <style>
            article {
                    background: rgba(0, 0, 0, 0) <?php if(!empty($background_image[1][1])){ echo 'url("'.$background_image[1][1].'")';}?> repeat scroll 0 0 / 50% auto;
            }
    </style>
  <body>
  <div id="wrapper">

     <!-- header -->
    <header>
        <div id="page">
                    <div class="header">
                            <a href="#menu"></a>
                    </div>

                    <!-- lang -->
                    <nav>
                        <ul class="lang-menu" style="cursor: pointer">
                            <li class="menu-item-has-children">English
                                <span>▼</span>
                                <ul class="sub-menu">
                                    <?php
                                    $language_name = get_post_meta ($top[0]->ID,'language_name', true);
                                    $language_image = get_post_meta ($top[0]->ID,'language_image', true);       
                                    $language_link = get_post_meta ($top[0]->ID,'language_link', true);
                                    for($i = 1; $i<= count($language_link); $i++){
                                    ?>
                                        <li>
                                            <a href="<?php echo $language_link[$i][1];?>"><?php echo $language_name[$i][1];?></a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                        </ul>
                    </nav>

                    <!-- logo -->
                    <div class="logo">
                            <a href="<?php echo get_home_url()?>"><img src="<?php echo get_template_directory_uri()?>/img/k_logo.png" alt="logo"></a>
                    </div>

                    <!-- desktop_menu -->
                    <div id="desktop_menu">
                            <ul id="toggle">
                                    <li> 
                                        <a class="toggle highlight" href="<?php echo $about_link[1][1];?>">ABOUT</a>
                                    </li>
                                    <li>
                                            <a class="toggle highlight" href="#" >HOSTEL</a>
                                            <ul class="inner child">
                                            <?php
                                            if (!empty($global_cities)){
                                                $i = 0;
                                                foreach ($global_cities as $city) {
                                            ?>
                                                    <li>
                                                            <a class="toggle menu"><?php echo $city->name?></a>
                                                            <ul class="inner child child02">
                                                                <?php
                                                                if (!empty( $global_hotels[$i] )){
                                                                    foreach($global_hotels[$i] as $hotel){
                                                                ?>
                                                                        <li><a href="<?php echo get_home_url()?>/?hotel=<?php echo $hotel->post_name?>"><?php echo $hotel->post_title?></a></li>
                                                                <?php
                                                                    }
                                                                }
                                                                $i++;
                                                                ?>
                                                            </ul>
                                                    </li>
                                            <?php
                                                }
                                            }
                                            ?>                                                
                                            </ul>
                                    </li>
                                    <li>
                                            <a class="toggle highlight" href="<?php echo get_home_url()?>/?p=<?php echo $recent_post[0]["ID"]?>">BLOG</a>
                                    </li>
                                    <li>
                                            <a class="toggle highlight"  href="<?php echo $staff_link[1][1];?>">STAFF</a>
                                    </li>
                                    <li>
                                            <a class="toggle highlight"  href="<?php echo $recruitment_link[1][1];?>">RECRUITMENT</a>
                                    </li>
                                    <li>
                                            <a class="toggle highlight"  href="<?php echo $qa_link[1][1];?>">Q&A</a>
                                    </li>
                                    <li>
                                            <a class="toggle highlight" href="<?php echo $car_rental_link[1][1];?>">GROUP</a>
<!--                                            <ul class="inner child">
                                                    <li>
                                                            <ul class="toggle menu">
                                                                    <li><a href="">COMING SOON</a></li>
                                                            </ul>
                                                    </li>
                                            </ul>-->
                                    </li>
                            </ul>
                    </div>

                    <!-- spn_menu -->

                    <nav id="menu">
                            <ul>
                                    <li>
                                            <a href="#">TOP</a>
                                    </li>
                                    <li>
                                            <a href="<?php echo $about_link[1][1];?>">ABOUT</a>
                                    </li>
                                    <li>
                                            <a>HOSTEL</a>
                                            <ul>
                                            <?php
                                            if (!empty($global_cities)){
                                                $i = 0;
                                                foreach ($global_cities as $city) {
                                            ?>
                                                    <li>
                                                            <a><?php echo $city->name?></a>
                                                            <ul>
                                                                <?php
                                                                if (!empty( $global_hotels[$i] )){
                                                                    foreach($global_hotels[$i] as $hotel){
                                                                ?>
                                                                        <li><a href="<?php echo get_home_url()?>/?hotel=<?php echo $hotel->post_name?>"><?php echo $hotel->post_title?></a></li>
                                                                <?php
                                                                    }
                                                                }
                                                                $i++;
                                                                ?>
                                                            </ul>
                                                    </li>
                                            <?php
                                                }
                                            }
                                            ?>                                                 
                                            </ul>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo get_home_url()?>/?p=<?php echo $recent_post[0]["ID"]?>">BLOG</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo $staff_link[1][1];?>">STAFF</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo $recruitment_link[1][1];?>">RECRUITMENT</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo $qa_link[1][1];?>">Q&A</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo $car_rental_link[1][1];?>">GROUP</a>
<!--                                            <ul class="inner child">
                                                    <li>
                                                            <ul class="toggle menu">
                                                                    <li><a href="">COMING SOON</a></li>
                                                            </ul>
                                                    </li>
                                            </ul> -->
                                    </li>
                            </ul>
                    </nav>
                    </div>
    </header>

