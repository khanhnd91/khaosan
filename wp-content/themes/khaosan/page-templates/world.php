<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/jquery.mmenu.all.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/flickslider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/common.css">
<style>
#content {
    padding: 100px 0 60px;
}
.booking_world {
    background: #000 none repeat scroll 0 0;
    color: #fff;
    float: left;
    font-size: 18px;
    margin: 10px;
    padding: 20px;
    text-align: center;
    width: 40%;
}
.booking_world > img {
    margin: 0 8px -3px;
    width: 20px;
}
@media screen and (max-width: 960px) {
    .booking_world {width: 90%; margin: 10px auto;}
}
</style>
<?php
/**
 * Template Name: world
 */
get_header();
if(have_posts()) :
while (have_posts()) : the_post();
?>
    <article>
        <div id="content">
            <!-- content -->
            <div class="detail">
                <?php
                the_content();
                ?>
            </div>
        </div>
    </article>
<?php
endwhile;
endif;
get_footer();
?>
<!-- js -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.mmenu.min.all.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/flickslider.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>

