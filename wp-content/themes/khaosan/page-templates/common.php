<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/jquery.mmenu.all.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/flickslider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/common.css">
<?php
/**
 * Template Name: common
 */
get_header();
?>
    <article>
        <?php
        while ( have_posts() ) : the_post();
        ?>
        <!-- topimg -->
        <div class="flickSlider">
            <div class="flickView">
                <ul>
                    <?php
                    $thumbnail = get_post_meta ( get_the_ID(),'page_thumbnail', true);
                    $other_page_link = get_post_meta ( get_the_ID(),'other_page_link', true);
                    $other_page_title = get_post_meta ( get_the_ID(),'other_page_title', true);
                    $other_page_icon = get_post_meta ( get_the_ID(),'other_page_icon', true);
                    ?>
                    <li><a href="#1"><img src="<?php echo $thumbnail[1][1];?>" alt=""></a></li>
                </ul>
            </div><!--/.flickView-->
        </div><!--/.flickSlider-->

        <div id="hostel_tittle">
            <div class="tittle_text">
                <p>
                    <?php the_title();?>
                </p>
            </div>
        </div>

        <div id="content">
            <!-- menu area -->
            <nav class="hostel">
                <!-- menu area -->
                <div class="menu_area">
                    <ul>
                        <?php
                        for($i=1;$i<=count($other_page_link);$i++){
                            if($other_page_link[$i][1]!=''){
                                echo '<li><a style="color:black" href="'.$other_page_link[$i][1].'"><img src="'.$other_page_icon[$i][1].'">'.$other_page_title[$i][1].'</a></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
                <?php
                $banner_title= get_post_meta (get_the_ID(),'banner_title', true);
                $banner_link = get_post_meta ( get_the_ID(),'banner_link', true);
                $banner_eye_catch = get_post_meta ( get_the_ID(),'banner_eye_catch', true);    
                ?>
                <div class="other_facilities">
                <?php
                    $count = count($banner_link);
                    for($i = 1;$i<=$count;$i++){
                        if($banner_link[$i][1]!=''){
                            echo    '<a href="'.$banner_link[$i][1].'" target=’_blank’>
                                        <div class="other_hostel">
                                            <img src="'.$banner_eye_catch[$i][1].'">
                                            <p>
                                                '.$banner_title[$i][1].'
                                            </p>
                                        </div>
                                    </a>';
                        }
                    }
                ?>
                </div>
            </nav>

            <!-- content -->
            <div class="detail">
            <?php
                the_content();
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
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.mmenu.min.all.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/flickslider.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>