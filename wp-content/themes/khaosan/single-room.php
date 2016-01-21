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
get_header();
?>
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
                    <!-- slide -->
                    <?php 
                        $i = 1;
                        foreach ($slide_images[$i] as $slide_image) {
                    ?>
                    <li>
                        <a href="#">
                            <img src="<?php echo $slide_image;?>" alt="">
                        </a>
                    </li>
                    <?php $i++;
                    } ?>
                    <!-- slide -->
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
            <?php include(locate_template('hotel-sidebar.php'));?>
            <!-- content -->
                <div class="detail">
                    <?php
                        $types = get_post_meta (get_the_ID(),'room_type', true);
                        $equipments = get_post_meta (get_the_ID(),'room_equipment', true);
                        $images = get_post_meta (get_the_ID(),'room_image', true);
                        $image_descriptions = get_post_meta (get_the_ID(),'room_image_description', true);
                        $costs = get_post_meta (get_the_ID(),'room_cost', true);
                        $count = count($types);
                        for($i = 1;$i<=$count;$i++){
                            echo '<div class="detail_tittle">';
                            echo $types[$i][1];
                            echo '</div>';
                            echo '<div class="facilities_icon">';
                            foreach($equipments[$i] as $equipment){
                                echo '<img src="'.$equipment.'" style="margin-left:5px">';
                            }
                            echo '</div>';
                            echo '<div class="detail_text">
                                    <div class="facilities">';
                            $k = 1;
                            foreach($images[$i] as $image){
                                echo    '<div class="facilities_box">
                                            <div class="facilities_img">';
                                echo           '<a href="'.$image.'" rel="lightbox[imagegroup1]">
                                                    <img src="'.$image.'">
                                                </a>
                                            </div>';
                                echo        '<div class="facilities_text">
                                                '.$image_descriptions[$i][$k].'
                                            </div>
                                        </div>';
                                $k++;
                            }
                            echo    '</div>
                                 </div>';
                            echo '<div class="detail_text">
                                    '.$costs[$i][1].'
                                  </div>';
                        }
                    ?>
                </div>
       
               
        <?php

        $other_hotels_name = get_post_meta ( get_the_ID() ,'other_hotel_room_name', true);
        $other_hotels_link = get_post_meta (  get_the_ID() ,'other_hotel_room_link', true);
        $other_hotels_eye_catch = get_post_meta (  get_the_ID() ,'other_hotel_room_eye_catch', true);
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
                            if($other_hotels_name[$i][1]!=='' && $other_hotels_link[$i][1] !=='' ){ ?>
                                <div>
                                    <a href="<?php echo   $other_hotels_link[$i][1]; ?>" >
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
<script src="<?php echo get_template_directory_uri()?>/js/lightbox.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/slider.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/owl-carousel/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
     
      $("#owl-example").owlCarousel();
     
    });
    </script>