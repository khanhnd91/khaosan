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
                <span>subtitle</span>
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
            <?php
                the_content();
            ?>
            </div>
        </div>
        <?php
        endwhile;
        ?>
    </article>

        <!-- other -->
        <?php get_template_part( 'other' );?>
        <!-- NEWS -->
        <?php get_template_part( 'news' );?>
<?php
get_footer();
?>
<!-- js -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.mmenu.min.all.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/flickslider.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>