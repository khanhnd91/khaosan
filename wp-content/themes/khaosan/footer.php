            <!-- booking -->
            <?php
            if(is_singular( array( 'hotel', 'room','access' ))){
                if(get_post_type( get_the_ID()) == 'hotel'){
                    $booking =  get_post_meta (get_the_ID(),'hotel_booking', true);
                }else if(get_post_type( get_the_ID()) == 'room' ){
                    $booking =  get_post_meta (wp_get_post_parent_id(get_the_ID()),'hotel_booking', true);
                }else if(get_post_type( get_the_ID()) == 'access'){
                    $booking =  get_post_meta (wp_get_post_parent_id(get_the_ID()),'hotel_booking', true);
                }
            ?>
                <div id="booking_image">
                        <a href="<?php echo $booking[1][1]?>"><img src="<?php echo get_template_directory_uri()?>/img/icon/booking.png"></a>
                </div>                
            <?php
            }else if(is_home()){
            ?>
                <!-- page-top -->
                <p id="page-top">
                        <a href="#">▲</a>
                </p>
            <?php
            }
            ?>
        </div>
	<footer>
		<div class="footer_contents">
			<div class="footer_menu">
				<a href="#">
					<p>ABOUT</p>
				</a>
				<a href="#">
					<p>STAFF</p>
				</a>
				<a href="#">
					<p>RECRUITMENT</p>
				</a>
				<a href="#">
					<p>Q&A</p>
				</a>
				<a href="#">
					<p>CAR RENTAL</p>
				</a>
			</div>
			<div class="footer_sns">
				<a href="#">
					<img src="<?php echo get_template_directory_uri()?>/img/menu/facebook.png">
				</a>
				<a href="#">
					<img src="<?php echo get_template_directory_uri()?>/img/menu/twitter.png">
				</a>
				<a href="#">
					<img src="<?php echo get_template_directory_uri()?>/img/menu/google_plus.png">
				</a>
				<a href="#">
					<img src="<?php echo get_template_directory_uri()?>/img/menu/pin.png">
				</a>
			</div>
		</div>
		<address>&#169; Khaosan Tokyo Hostel, Cheapest Hostel in Central Tokyo</address>
	</footer>
    <?php wp_footer(); ?>
</body>
</html>