<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/jquery.mmenu.all.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/flickslider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/common.css">

<!-- favicon -->
<link rel="icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
<!-- canonical -->
<link rel="canonical" href="#">
<?php
get_header(); ?>
    <!-- main area -->
    <article>
        <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();
            $slide_images = get_post_meta ( get_the_ID(),'hotel_slide_image', true);
        ?>
                <div class="flickSlider" style="padding:0 0 45px">
                    <div class="flickView">
                        <ul>
                        <?php
                        $i = 1;
                        foreach($slide_images[1] as $slide_image){
                        ?>
                            <li><a href="#<?php echo $i?>"><img src="<?php echo $slide_image;?>" alt=""></a></li>
                        <?php
                        $i++;
                        }
                        ?>
                        </ul>
                    </div><!--/.flickView-->

                    <div class="flickThumb" style="background: black">
                        <ul>
                        <?php
                        $i = 1;
                        foreach($slide_images[1] as $slide_image){
                        ?>
                            <li><a href="#<?php echo $i?>"><img src="<?php echo $slide_image;?>" alt=""></a></li>
                        <?php
                        $i++;
                        }
                        ?>
                        </ul>
                    </div><!--/.flickThumb-->

                </div><!--/.flickSlider-->
                <div id="hostel_tittle">
                    <div class="tittle_text">
                        <p>
                            <?php
                            $hotel_name = get_post_meta ( get_the_ID(),'hotel_name', true);
                            echo $hotel_name[1][1];
                            ?>
                        </p>
                        <span>
                            <?php
                            $city_list = wp_get_post_terms(get_the_ID(), 'city', array("fields" => "all"));
                            foreach($city_list as $city){
                                echo $city->name;
                            }
                            ?>
                        </span>
                    </div>
                </div>
                <div id="content">
                    <!-- menu area -->
                    <?php get_template_part('hotel-sidebar');?>
                    <!-- content -->
                    <div class="detail">
                        <?php the_content()?>
                    </div>
                </div>
                <?php
        endwhile;
        ?>
    </article>
<?php
get_footer();
?>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.mmenu.min.all.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/flickslider.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>