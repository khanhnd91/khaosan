<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/jquery.mmenu.all.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/flickslider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/isotope.css">

<!-- favicon -->
<link rel="icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
<!-- canonical -->
<link rel="canonical" href="#">
<?php
get_header();

?>
    <!-- main area -->
    <article>
            <div id="staff_page">
                    <!-- content -->

                    <div class="staff_title">
                    STAFF
                    </div>

                    <div class="staff_menu">

                            <div class="filter">
                                    <a href="#" data-filter="*" id="all-tags" class="current staff-tag">All Categories</a>
                                    <?php
                                    $tags = get_tags();
                                    foreach($tags as $tag){
                                    ?>
                                    <a href="#" class="staff-tag" id="<?php echo $tag->slug;?>" data-filter=".<?php echo $tag->slug ?>"><?php echo $tag->name ?></a>
                                    <?php
                                    }
                                    ?>
                            </div>

                    </div>


                    <div class="staff_area">
                            <div class="isotope">
                                    <?php
                                    // Start the Loop.
                                    while ( have_posts() ) : the_post();
                                    $tags = wp_get_post_tags(get_the_ID());
                                    $str = '';
                                    foreach($tags as $tag){
                                        $str = $str.$tag->slug.' '; 
                                    }
                                    ?>
                                    <div class="<?php echo $str; ?> item">
                                            <?php 
                                            $link = get_post_meta ( get_the_ID(),'staff_link', true);
                                          
                                            $link_staff = get_home_url().'/?post_type=staff&p='.get_the_ID();
                                            ?>
                                            <a class = "link_staff" href="<?php echo $link_staff; ?>">
                                                    <div class="isotope_image">
                                                    <?php
                                                    $thumbnail = get_post_meta ( get_the_ID(),'staff_thumbnail', true);
                                                    if($thumbnail[1][1]!=''){
                                                    ?>
                                                            <img src="<?php echo $thumbnail[1][1];?>">
                                                    <?php }?>
                                                    </div>
                                                    <div class="isotope_title">
                                                    <p>
                                                        <?php  echo the_title(); ?>
                                                    </p>
                                                    </div>
                                                    <div class="isotope_text">
                                                        <?php
                                                        $description = get_post_meta ( get_the_ID(),'staff_description', true);
                                                        echo $description[1][1];
                                                        ?>
                                                    </div>
                                            </a>
                                    </div>
                                    <?php
                                    endwhile;
                                    ?>                                
                            </div>
                    </div>
            </div>
    </article>
<?php
get_footer();
?>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.mmenu.min.all.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/flickslider.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/common.js"></script>
<!--<script src="<?php echo get_template_directory_uri()?>/js/masonry.pkgd.min.js"></script>-->
<script src="<?php echo get_template_directory_uri()?>/js/imagesloaded.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/jquery.isotope.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/set.js"></script>
<script>
$(window).load(function(){
    url = window.location.href;
    url = url.split("&");
    if(url[1]){
        tag = url[1].split("=");
        if(tag[1] && tag[1] !== 'all-tags'){
            $('#'+tag[1]).click();
        }
    }
   $('.staff-tag').click(function(){
       url = window.location.href;
       url = url.split("&");
       url = url[0]+"&sort="+$(this).attr('id');
       window.history.pushState("string", "Title", url);
   });
   $('.link_staff').click(function(){
        url_staff = $('a.link_staff').attr('href');
        url = window.location.href;
        host_name =  window.location.hostname;
        url_pathname_staff = window.location.search;
//alert(url+" va " +"http://"+host_name+"?post_type=staff");

        //if (url != "http://"+host_name+"?post_type=staff" || url != "http://"+host_name+"?post_type=staff&sort=all-tags") {
            url = url.split("&");
            url = url[1].split("=");
            tag = url[1];
        //}
        url_staff = url_staff+'&tag='+tag;
        $('a.link_staff').attr('href',url_staff);
   });
});
</script>