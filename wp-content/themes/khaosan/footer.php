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
        <?php
        $top = get_posts(array('post_type' => 'top'));
        $about_link = get_post_meta ($top[0]->ID,'about_link', true);
        $staff_link = get_post_meta ($top[0]->ID,'staff_link', true);
        $qa_link = get_post_meta ($top[0]->ID,'qa_link', true);
        $recruitment_link = get_post_meta ($top[0]->ID,'recruitment_link', true);
        $car_rental_link = get_post_meta ($top[0]->ID,'car_rental_link', true);
        $fb_link = get_post_meta ($top[0]->ID,'fb_link', true);
        $twitter_link = get_post_meta ($top[0]->ID,'twitter_link', true);
        $google_plus_link = get_post_meta ($top[0]->ID,'google_plus_link', true);
        $pin_link = get_post_meta ($top[0]->ID,'pin_link', true);        
        ?>
		<div class="footer_contents">
			<div class="footer_menu">
				<a href="<?php echo $about_link[1][1];?>">
					<p>ABOUT</p>
				</a>
				<a href="<?php echo $staff_link[1][1];?>">
					<p>STAFF</p>
				</a>
				<a href="<?php echo $recruitment_link[1][1];?>">
					<p>RECRUITMENT</p>
				</a>
				<a href="<?php echo $qa_link[1][1];?>">
					<p>Q&A</p>
				</a>
				<a href="<?php echo $car_rental_link[1][1];?>">
					<p>GROUP</p>
				</a>
			</div>
			<div class="footer_sns">
				<a href="<?php echo $fb_link[1][1];?>">
					<img src="<?php echo get_template_directory_uri()?>/img/menu/facebook.png">
				</a>
				<a href="<?php echo $twitter_link[1][1];?>">
					<img src="<?php echo get_template_directory_uri()?>/img/menu/twitter.png">
				</a>
				<a href="<?php echo $google_plus_link[1][1];?>">
					<img src="<?php echo get_template_directory_uri()?>/img/menu/google_plus.png">
				</a>
				<a href="<?php echo $pin_link[1][1];?>">
					<img src="<?php echo get_template_directory_uri()?>/img/menu/instagram.png">
				</a>
			</div>
		</div>
		<address>&#169; Khaosan Tokyo Hostel, Cheapest Hostel in Central Tokyo</address>
	</footer>
    
    <?php wp_footer(); ?>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        var url = window.location.href;         //get full url: http://khaosan-test.sakura.ne.jp/?hotel=khaosan-tokyo-world
        var host = window.location.host;        //get host name: khaosan-test.sakura.ne.jp

        var url_new = url.substring(7,url.length - 1);  // cut new url: khaosan-test.sakura.ne.jp/?hotel=khaosan-tokyo-world
        host = host.trim();

        if(url_new === host){
            $('a.toggle.highlight').removeAttr("style");
        }
        else{
            var type_page = "";
    
                if( url.indexOf( "hotel" ) != -1 || url.indexOf( "room" ) != -1 || url.indexOf( "access" ) != -1){
                    type_page = "hostel";
                }
                else if(url.indexOf( "staff" ) != -1){
                    type_page = "staff";
                }
                else if (url.indexOf( "qa" ) != -1 ) {
                    type_page = "q&a";
                }
                else if(url.indexOf( "carrental" ) != -1 ){
                    type_page = "car rental";
                }
                else if( url.indexOf( "recruitment" ) != -1 ){
                    type_page = "recruitment";
                }
                else if( url.indexOf( "about" ) != -1 ){
                    type_page = "about";
                }
                else if( url.indexOf( "ウェブサイトリニューアルに関しまして" != -1 )){
                    type_page = "blog";
                }
            /*find element have text equel type_page*/
            $('a.toggle.highlight').filter(function(index){
                return $( this ).text().toLowerCase() == type_page;
            }).css({ "text-decoration" : "underline" , "color" : "#bd0000" });
               
        }
    });
</script>