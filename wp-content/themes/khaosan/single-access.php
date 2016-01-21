<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/jquery.mmenu.all.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/flickslider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/js/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/js/owl-carousel/owl.theme.css">

<style>
.container { display: none !important;}
#content { margin: 120px auto;}
#hostel_tittle { display: none;}
</style>

<?php
get_header(); ?>
    <!-- main area -->
    <article>
        <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();
            $slide_images = get_post_meta ( wp_get_post_parent_id( get_the_ID()),'hotel_slide_image', true);
        ?>
        <div class="container">
            <div class="wideslider">
                <ul>
                <?php 

                $i = 1;
                foreach ($slide_images[$i] as $slide_image) {
                 ?>
                    <!-- slide -->
                    <li>
                        <a href="#">
                            <img src="<?php echo $slide_image;?>" alt="">
                        </a>
                    </li>
                    <?php $i++;
                    } ?>
                </ul>
            </div>
        </div>
        <!-- Hotel title -->
        <div id="hostel_tittle">
            <div class="tittle_text">
                <p>
                <?php
                    $hotel_name = get_post_meta (  wp_get_post_parent_id( get_the_ID()),'hotel_name', true);
                    echo $hotel_name[1][1];
                ?>
                </p>
                <span>
                    <?php
                        $city_list = wp_get_post_terms( wp_get_post_parent_id( get_the_ID()), 'city', array("fields" => "all"));
                        foreach($city_list as $city){
                            echo $city->name;
                        }
                    ?>
                </span>
            </div>
        </div>
        <!-- Hotel title -->
        <div id="content">
        <!-- menu area -->
            <?php get_template_part('hotel-sidebar');?>
                <!-- content -->
                <div class="detail">
                    <?php the_content();?>
                </div>
        
            
        <?php

        $other_hotels_name = get_post_meta ( get_the_ID() ,'other_hotel_access_name', true );
        $other_hotels_link = get_post_meta (  get_the_ID() ,'other_hotel_access_link', true);
        $other_hotels_eye_catch = get_post_meta (  get_the_ID() ,'other_hotel_access_eye_catch', true);
        ?>
        <!-- Order -->
                    <div class="staff_relation_title">
                        See Other Hostels Nearby
                    </div>
        <!-- other hostel -->
                    <div id="owl-example" class="owl-carousel">
                     <?php
                        $count = count($other_hotels_name);
                        
                        for($i = 1; $i <= $count; $i++ ){
                            if($other_hotels_name[$i][1]!=='' && $other_hotels_link[$i][1] !==''){ ?>
                                <div>
                                    <a href="<?php echo  $other_hotels_link[$i][1]; ?>" >
                                        <p><?php echo $other_hotels_name[$i][1]; ?></p>
                                        <img src="<?php echo $other_hotels_eye_catch[$i][1]; ?>" alt="">
                                    </a>
                                </div>
                <?php       
                            }
                        }
                ?> 
                    </div>
                </div>
                <?php
        endwhile;
        ?>
    </article>
<?php
get_footer();
?>
<!-- js -->

<script src="<?php echo get_template_directory_uri()?>/js/jquery.mmenu.min.all.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/flickslider.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/slider.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/owl-carousel/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
     
      $("#owl-example").owlCarousel();
     
    });
    </script>