<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/jquery.mmenu.all.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/flickslider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/common.css">
<?php
get_header(); ?>
    <!-- main area -->
    <article>
        <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();
            $slide_images = get_post_meta ( wp_get_post_parent_id( get_the_ID()),'hotel_slide_image', true);
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
                <div id="content">
                    <!-- menu area -->
                    <?php get_template_part('hotel-sidebar');?>
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
                </div>
                <!-- other -->
                <?php get_template_part('other');?>
                <!-- NEWS -->
                <?php get_template_part('news');?>
                <?php
        endwhile;
        ?>
    </article>
<?php
get_footer();
?>
<!-- js -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.mmenu.min.all.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/flickslider.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/lightbox.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>