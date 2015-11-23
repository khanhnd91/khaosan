<?php
get_header(); ?>

    <!-- main area -->
    <article>
        <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();
            if ( have_posts() ):
            endif;
        endwhile;
        ?>
        <div class="flickSlider">

            <div class="flickView">
                    <ul>
                            <li><a href="#1"><img src="img/top/top_kyoto.jpg" alt=""></a></li>
                            <li><a href="#2"><img src="img/top/top_samurai.jpg" alt=""></a></li>
                            <li><a href="#3"><img src="img/top/top_kyoto.jpg" alt=""></a></li>
                            <li><a href="#4"><img src="img/top/top_kyoto.jpg" alt=""></a></li>
                            <li><a href="#5"><img src="img/top/top_samurai.jpg" alt=""></a></li>
                            <li><a href="#6"><img src="img/top/top_kyoto.jpg" alt=""></a></li>
                    </ul>
            </div><!--/.flickView-->

            <div class="flickThumb">
                    <ul>
                            <li><img src="img/top/top_kyoto.jpg" alt=""></li>
                            <li><img src="img/top/top_samurai.jpg" alt=""></li>
                            <li><img src="img/top/top_kyoto.jpg" alt=""></li>
                            <li><img src="img/top/top_kyoto.jpg" alt=""></li>
                            <li><img src="img/top/top_samurai.jpg" alt=""></li>
                            <li><img src="img/top/top_kyoto.jpg" alt=""></li>
                    </ul>
            </div><!--/.flickThumb-->

        </div><!--/.flickSlider-->
        <div id="hostel_tittle">
            <div class="tittle_text">
                <p>KHAOSAN TOKYO<br>SAMURAI CAPSULE</p>
                <span>TOKYO</span>
            </div>
        </div>
        <div id="content">
        <!-- menu area -->
        <?php get_template_part('hotel-sidebar');?>
        <!-- content -->
        <!--get the post content here-->
        </div>

        <!-- other -->
        <?php get_template_part('other');?>
        <!-- NEWS -->
        <?php get_template_part('news');?>
    </article>
<?php
get_footer();
