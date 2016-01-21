<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/jquery.mmenu.all.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/flickslider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/isotope.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/js/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/js/owl-carousel/owl.theme.css">
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

	.booking_world:hover {
    	opacity: 0.8;
	}

	.booking_world > img {
    	margin: 0 8px -3px;
    	width: 20px;
	}
    .owl-carousel {
    height: 240px;
    margin-top: 20px;
    }
    .isotope .item {
    width: 100% !important;
    }
    .staff_box_area {
    margin-bottom: 50px;
    }
    .staff_box {
    float: left;
    margin: 0;
    padding: 0;
    }
    .owl-item p {
    position: static;
    width: auto;
    }
    .item img {
    border: none;
    }
	@media screen and (max-width: 960px) {
		.booking_world {width: 90%; margin: 10px auto;}
	}
	</style>
<!-- favicon -->
<link rel="icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
<!-- canonical -->
<link rel="canonical" href="#">
<?php
	get_header();
    $current_post_id = $post->ID;
?>
 <!-- main area -->
 <article>
<?php while ( have_posts() ) : the_post();
	
 ?>
			<div id="content">

				<!-- content -->
				<div class="detail">
					<div class="staff_tittle">
                		<?php echo the_title(); ?>
                	</div>
                <div class="staff_text">
                	<div class="staff_image">
                	<?php
                   
                        $thumbnail = get_post_meta ( get_the_ID() ,'staff_thumbnail', true);
                        if($thumbnail[1][1] != ''){
                    ?>
                		<img src="<?php echo $thumbnail[1][1];?>">
                		<?php }?>
                	</div>
                	<div class="staff_explanation">
                	<?php
                           /* $description = get_post_meta ( get_the_ID(),'staff_description', true);
                            echo $description[1][1];*/
                            the_content();
                    ?>
                	</div>
                    <!-- Order -->
                    <?php
                    $order_current_staff = get_post_meta ( $current_post_id ,'staff_order', true); 
                    
                    $args = array(
                        
                       'post_status' => 'publish', // optional
                        'post_type' => 'staff', // Change to match your post_type
                        'posts_per_page' => -1 // ALL posts
                        
                    );
                    $lower_staff = array();   //store array element have order lower current order
                    $higher_staff = array();   //store array element have order higher current order

                    $all_post =  new WP_Query($args);
                    
                    if( $all_post->have_posts() ) {
                      /* find staff have order smaller (biger) in the nearest position than the current order*/
                   while ($all_post->have_posts()) : $all_post->the_post();
                      /*store element in array*/
                        $order_other_staff = get_post_meta (get_the_ID(),'staff_order', true);
                        if( $order_other_staff[1][1] < $order_current_staff[1][1] && $order_other_staff[1][1]!= "" ){

                            $lower_staff = $lower_staff + ( array ( $order_other_staff[1][1] => get_the_ID() ));
                           continue;
                        }
                        if($order_other_staff[1][1] > $order_current_staff[1][1] && $order_other_staff[1][1]!= "" ){

                            $higher_staff = array_merge( $higher_staff , array( $order_other_staff[1][1] => get_the_ID()) );
                            
                        }
                        endwhile;
                    }
                        wp_reset_query();

                        if(count($lower_staff) > 0 ){

                            krsort($lower_staff);  //sort descending by order

                            $id_staff_lower = current($lower_staff);

                            $tag_lower_staff = wp_get_post_tags($id_staff_lower);
                            $tags = wp_get_post_tags($id_staff_lower);

                            $link_staff_lower = get_home_url().'/?post_type=staff&p='.$id_staff_lower.'&tag='.$tags[1]->slug;
                            $staff_name_lower = get_the_title( $id_staff_lower );
                        }
                        if (count($higher_staff) > 0 ) {

                            ksort($higher_staff);  //sort ascending by order

                            $id_staff_higher = current($higher_staff);

                            $tag_higher_staff = wp_get_post_tags($id_staff_higher);
                            $tags = wp_get_post_tags($id_staff_higher);

                            $link_staff_higher = get_home_url().'/?post_type=staff&p='.$id_staff_higher.'&tag='.$tags[1]->slug;
                            $staff_name_higher =  get_the_title( $id_staff_higher ) ;
                        }
                        
                     ?>
                	<div class="staff_next"><a href="<?php echo $link_staff_higher; ?>"><?php echo $staff_name_higher; ?></a> >> </div>
                	<div class="staff_prev"> << <a href="<?php echo $link_staff_lower; ?>"><?php echo $staff_name_lower; ?></a></div>  
                    <!-- Order -->
                	<div class="staff_relation_title">
                		Guests Who Watched This Staff Also Watched
                	</div>

                	<div class="staff_box_area">
                    <!-- Other Staff -->
          <div id="owl-example" class="owl-carousel owl-theme">
             <?php   
                    if(isset($_GET['tag'])){
                        $tag = $_GET['tag'];
                        if($tag === '' || $tag === 'all-tags'){
                            $tags = wp_get_post_tags($current_post_id);
                            $tag = $tags[1]->slug;
                        }
                    }
                    $args = array(
                        'tag' => $tag,
                        'post_type' => 'staff',
                        'showposts'=>6
                    );
                    $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : $my_query->the_post(); 
                            $thumbnail = get_post_meta ( get_the_ID() , 'staff_thumbnail' , true);
                            $link_staff = get_home_url().'/?post_type=staff&p='.get_the_ID().'&tag='.$tag;
                                if($thumbnail[1][1]!=''){
                                    if($current_post_id !== $post->ID){  ?>
                
                		    <div class="staff_box isotope">
                             <div class="item isotope-item">
                                <a href="<?php echo $link_staff; ?>">
                                    <!-- <div class="<?php get_tag(get_the_ID()); ?> item"> -->
                                    <img src = "<?php echo $thumbnail[1][1];?>">
                                </a>
                                <div class="isotope_title">
                                        <p>
                                            <?php  echo the_title(); ?>
                                        </p>
                                    </div>
                            </div>
                            </div>
                		
				<?php   }
                    }
                    endwhile;
                } //if ($my_query)
  wp_reset_query();  // Restore global post data stomped by the_post().
?>
                	</div>
                  </div>
                	<div class="all_staff">
                		<a href="<?php echo get_home_url().'/?post_type=staff'; ?>"><p>See More</p></a>
                	</div>


                </div>
				</div>
			</div>
    <?php
        endwhile;
    ?> 
</article>
 <!-- main area -->

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

<script src="<?php echo get_template_directory_uri()?>/js/owl-carousel/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
     
      $("#owl-example").owlCarousel();
     
    });
    </script>