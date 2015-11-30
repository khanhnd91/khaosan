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
        ?>
		<!-- topimg -->
                <div class="flickSlider">
                    <div class="flickView">
                            <ul>
                                    <li><a href="#1"><img src="<?php echo get_template_directory_uri()?>/img/top/about_top.jpg" alt=""></a></li>
                            </ul>
                    </div><!--/.flickView-->
		</div><!--/.flickSlider-->
                <div id="hostel_tittle">
                    <div class="tittle_text">
                        <p>
                            KHAOSAN BLOG
                        </p>
                        <span>subtitle</span>
                    </div>
                </div>

                <div id="content">
                    <!-- menu area -->
                    <nav class="hostel">
                        <!-- categories area -->
            		<div class="blog_menu_area">
                            <ul>BKK(13)
                            <?php 
                            $categories = get_the_category();
                            foreach ( $categories as $category ) {
                                echo '<a href="#"><li>'.$category->name.'</li></a>';
                            }
                            ?>
                            </ul>
                            <ul>カオサン東京のこと
                            </ul>
            		</div>
            		<!-- monthly menu -->
            		<div class="blog_menu_area">
                            <ul>
                            <a href="#"><li>October 2014 (2)</li></a>
                            <a href="#"><li>September 2014 (1)</li></a>
                            <a href="#"><li>August 2014 (3)</li></a>
                            <a href="#"><li>July 2014 (3)</li></a>
                            </ul>
            		</div>
                    </nav>
                    <!-- content -->
                    <div class="detail">
                        <!-- article -->
                        <section id="article_wrapper">
                            <div class="tittle">
                                <h1><?php the_title();?></h1>
                                <div class="written"><?php the_date( 'Y/m/d', 'Written by on ');?></div>
                                <?php
                                $thumbnail = get_post_meta ( get_the_ID(),'post_thumbnail', true);
                                if($thumbnail!=''){
                                ?>
                                    <img src="<?php echo $thumbnail[1][1];?>">
                                <?php }?>
                            </div>

                            <div class="article">
                                <?php the_content();?>
                            </div>
                        </section>

                        <!-- social -->
                        <section id="social_section">
                          <div class="social">
                            <div class="social_box">
                                <!-- loop start -->
                                <?php
                                ?>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_home_url().'/?p='.get_the_ID();?>" target="_blank">
                                    <div class="sns" style="background-color: #305098;">
                                        <img src="<?php echo get_template_directory_uri()?>/img/menu/facebook.png">share 
                                    </div>
                                </a>
                                <a href="https://twitter.com/share?url=<?php echo get_home_url().'/?p='.get_the_ID();?>" target="_blank">
                                <div class="sns" style="background-color: #00aced;">
                                  <img src="<?php echo get_template_directory_uri()?>/img/menu/twitter.png">tweet 
                                </div>
                              </a>
                              <a href="https://plus.google.com/share?url=<?php echo get_home_url().'/?p='.get_the_ID();?>" target="_blank">
                                <div class="sns" style="background-color: #DA4C36;">
                                  <img src="<?php echo get_template_directory_uri()?>/img/menu/google_plus.png">+1 
                                </div>
                              </a>
                            </div>
                          </div>
                        </section>

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
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.mmenu.min.all.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/flickslider.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>