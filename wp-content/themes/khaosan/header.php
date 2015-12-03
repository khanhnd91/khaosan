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
        <style>
		article {
			background: rgba(0, 0, 0, 0) url("<?php echo get_template_directory_uri()?>/img/nami.png") repeat scroll 0 0 / 50% auto;
		}
	</style>
	<?php wp_head(); ?>
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
                }
                array_multisort($post_title, SORT_ASC, $global_hotels[$i]);
            }
            $i++;
        }
    }
    $recent_post = wp_get_recent_posts(array('numberposts' => 1,'post_status' => 'publish'));
?>
  <body onload="initialize();">
  <div id="wrapper">

     <!-- header -->
    <header>
        <div id="page">
                    <div class="header">
                            <a href="#menu"></a>
                    </div>

                    <!-- logo -->
                    <div class="logo">
                            <a href="<?php echo get_home_url()?>"><img src="<?php echo get_template_directory_uri()?>/img/k_logo.png" alt="logo"></a>
                    </div>

                    <!-- desktop_menu -->
                    <div id="desktop_menu">
                            <ul id="toggle">
                                    <li>
                                        <a class="toggle" href="<?php echo get_home_url()?>/about">ABOUT</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="#">HOSTEL</a>
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
                                            <a class="toggle" href="<?php echo get_home_url()?>/?p=<?php echo $recent_post[0]["ID"]?>">BLOG</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo get_home_url()?>/staff">STAFF</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo get_home_url()?>/recruitment">RECRUITMENT</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo get_home_url()?>/q&a">Q&A</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo get_home_url()?>/carrental">CAR RENTAL</a>
                                            <ul class="inner child">
                                                    <li>
                                                            <ul class="toggle menu">
                                                                    <li><a href="">COMING SOON</a></li>
                                                            </ul>
                                                    </li>
                                            </ul>
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
                                            <a href="<?php echo get_home_url()?>/about">ABOUT</a>
                                    </li>
                                    <li>
                                            <a>HOSTEL</a>
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
                                            <a class="toggle" href="<?php echo get_home_url()?>/?p=<?php echo $recent_post[0]["ID"]?>">BLOG</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo get_home_url()?>/staff">STAFF</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo get_home_url()?>/recruitment">RECRUITMENT</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo get_home_url()?>/q&a">Q&A</a>
                                    </li>
                                    <li>
                                            <a class="toggle" href="<?php echo get_home_url()?>/carrental">CAR RENTAL</a>
                                            <ul class="inner child">
                                                    <li>
                                                            <ul class="toggle menu">
                                                                    <li><a href="">COMING SOON</a></li>
                                                            </ul>
                                                    </li>
                                            </ul>
                                    </li>
                            </ul>
                    </nav>
            </div>
    </header>

