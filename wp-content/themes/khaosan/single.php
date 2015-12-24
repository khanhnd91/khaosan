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
get_header();
global $wp_query;
$month = $wp_query->query_vars['monthnum'];
$year = $wp_query->query_vars['year'];
$cat = $wp_query->query_vars['cat'];
?>
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
                    </div>
                </div>

                <div id="content">
                    <!-- menu area -->
                    <nav class="hostel">
                        <!-- categories area -->
                        <div class="blog_menu_area" style="color:#ffffff">
                            <?php 
                            wp_list_categories(array('show_count' => 1,'hide_empty' => 0,'depth' => 3,'title_li' => __(''))); 
                            ?>
                        </div>
                        <!-- monthly menu -->
                        <br>
                        <br>
                        <br>
                        <div class="blog_menu_area">
                            <?php
                            $args = array(
                                'type'            => 'monthly',
                                'limit'           => 12,
                                'format'          => 'custom', 
                                'before'          => '<li style="color:#ffffff">',
                                'after'           => '</li>',
                                'show_post_count' => true,
                                'echo'            => 1,
                                'order'           => 'DESC'
                            );
                            wp_get_archives( $args );
                            ?>
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
                        <div class="btn-paginate">
                            <?php
                            if($cat != ''){
                                $prev_post = get_previous_post(true);
                                if (!empty( $prev_post )){?>
                                  <a style="float: left; color:#000000" href="<?php echo get_permalink( $prev_post->ID ); ?>/?cat=<?php echo $cat?>">Older</a>
                                <?php
                                }
                                $next_post = get_next_post(true);
                                if (!empty( $next_post )){?>
                                  <a style="float: right; color:#000000" href="<?php echo get_permalink( $next_post->ID ); ?>/?cat=<?php echo $cat?>">Newer</a>
                                <?php
                                }
                            }else if($month != 0){
                                $options = array(
                                    'month' => $month,
                                    'year' => $year,
                                    'post_date' => get_the_date('Y-m-d H:i:s')
                                );
                                $args1 = array(
                                    'posts_per_page'  => 1,
                                    'suppress_filters' => false
                                );
                                $args2 = array(
                                    'posts_per_page'  => 1,
                                    'order' => 'ASC',
                                    'suppress_filters' => false
                                ); 
                                $filter1 = function ($where = '') use ( $options ) {
                                    $where .= " AND MONTH(post_date) = ".$options['month']." AND YEAR(post_date) = ".$options['year']." AND post_date < '".$options['post_date']."'";
                                    return $where;
                                };
                                add_filter('posts_where', $filter1);
                                $posts1 = get_posts($args1);
                                remove_filter('posts_where', $filter1);   
                                if (!empty( $posts1 )){?>
                                  <a style="float: left; color:#000000" href="<?php echo get_permalink( $posts1[0]->ID ); ?>/?monthnum=<?php echo $month?>&year=<?php echo $year?>">Older</a>
                                <?php
                                }
                                $filter2 = function ($where = '') use ( $options ) {
                                    $where .= " AND MONTH(post_date) = ".$options['month']." AND YEAR(post_date) = ".$options['year']." AND post_date > '".$options['post_date']."'";
                                    return $where;
                                };
                                add_filter('posts_where', $filter2);
                                $posts2 = get_posts($args2);
                                remove_filter('posts_where', $filter2);   
                                if (!empty( $posts2 )){?>
                                  <a style="float: right; color:#000000" href="<?php echo get_permalink( $posts2[0]->ID ); ?>/?monthnum=<?php echo $month?>&year=<?php echo $year?>">Newer</a>
                                <?php
                                }
                            }else{
                                $prev_post = get_previous_post();
                                if (!empty( $prev_post )){?>
                                  <a style="float: left; color:#000000" href="<?php echo get_permalink( $prev_post->ID ); ?>">Older</a>
                                <?php
                                }
                                $next_post = get_next_post();
                                if (!empty( $next_post )){?>
                                  <a style="float: right; color:#000000" href="<?php echo get_permalink( $next_post->ID ); ?>">Newer</a>
                                <?php
                                }                                    
                            }                                
                            ?>
                        </div>
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
