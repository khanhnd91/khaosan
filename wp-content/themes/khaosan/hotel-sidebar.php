<?php
    $link_hotel = "#";
    $link_room = "#";
    $link_access = "#";
    $post = get_post(get_the_ID());
    if($post->post_type == 'hotel'){
        $link_hotel = get_home_url().'/?hotel='.$post->post_name;
        $rooms = get_posts(array('post_parent' => get_the_ID(),'post_type' => 'room'));
        $link_room = get_home_url().'/?post_type=room&p='.$rooms[0]->ID;
        $access = get_posts(array('post_parent' => get_the_ID(),'post_type' => 'access'));
        $link_access = get_home_url().'/?post_type=access&p='.$access[0]->ID;
    }else if($post->post_type == 'room'){
        $link_room = get_home_url().'/?post_type=room&p='.get_the_ID();
        $hotel = get_post($post->post_parent);
        $link_hotel = get_home_url().'/?hotel='.$hotel->post_name;
        $access = get_posts(array('post_parent' => $post->post_parent,'post_type' => 'access'));
        $link_access = get_home_url().'/?post_type=access&p='.$access[0]->ID;
    }else if($post->post_type == 'access'){
        $link_access = get_home_url().'/?post_type=access&p='.  get_the_ID();
        $hotel = get_post($post->post_parent);
        $link_hotel = get_home_url().'/?hotel='.$hotel->post_name;
        $rooms = get_posts(array('post_parent' => $post->post_parent,'post_type' => 'room'));
        $link_room = get_home_url().'/?post_type=room&p='.$rooms[0]->ID;
    }
?>
<nav class="hostel">
    <!-- menu area -->
    <div class="menu_area">
        <div class="arrow" style="top: <?php if($post->post_type == 'hotel') echo '25px'; else if($post->post_type == 'room') echo "60px"; else echo "92px";?>; left: 12px;">
            <img src="<?php echo get_template_directory_uri()?>/img/menu/hostel/arrow.png">
        </div>
        <ul>
            <a style="color:#000000" href='<?php echo $link_hotel?>'><li><img src="<?php echo get_template_directory_uri()?>/img/menu/hostel/top.png"/>Top</li></a>
            <a style="color:#000000" href='<?php echo $link_room?>'><li><img src="<?php echo get_template_directory_uri()?>/img/menu/hostel/facilities.png">RoomType / Rates</li></a>
            <a style="color:#000000" href='<?php echo $link_access?>'><li><img src="<?php echo get_template_directory_uri()?>/img/menu/hostel/access.png">Access</li></a>
        </ul>
    </div>
    <!-- information -->
    <div class="information">
        <?php
        if($post->post_type !== 'hotel'){
            $common_info = get_post_meta ( wp_get_post_parent_id( get_the_ID()),'hotel_common_info', true);
            echo $common_info[1][1];
        }else{
            $common_info = get_post_meta (get_the_ID(),'hotel_common_info', true);
            echo $common_info[1][1];        
        }
        ?>
    </div>
    <?php
    if($post->post_type == 'room'){
    ?>
        <!-- icon description -->
        <div class="icon_description_area">
                <div class="icon_center">
                        <div class="icon_description">
                                <div class="icon_image"><img src="<?php echo get_template_directory_uri()?>/img/icon/locker.png"></div>
                                <div class="icon_text">Locker</div>
                        </div>
                        <div class="icon_description">
                                <div class="icon_image"><img src="<?php echo get_template_directory_uri()?>/img/icon/shower.png"></div>
                                <div class="icon_text">Shower</div>
                        </div>
                        <div class="icon_description">
                                <div class="icon_image"><img src="<?php echo get_template_directory_uri()?>/img/icon/wc.png"></div>
                                <div class="icon_text">Toilet</div>
                        </div>
                        <div class="icon_description">
                                <div class="icon_image"><img src="<?php echo get_template_directory_uri()?>/img/icon/aircon.png"></div>
                                <div class="icon_text">AC</div>
                        </div>
                        <div class="icon_description">
                                <div class="icon_image"><img src="<?php echo get_template_directory_uri()?>/img/icon/outlet.png"></div>
                                <div class="icon_text">Outlet</div>
                        </div>
                </div>
        </div>

       
    <?php
    }
    if($post->post_type == 'hotel'){
        $id = get_the_ID();
    }else{
        $id = wp_get_post_parent_id( get_the_ID());
    }
    if($post->post_type == 'hotel'){
    $banner_title = get_post_meta ($id,'banner_title', true);
    $banner_link = get_post_meta ($id,'banner_link', true);
    $banner_eye_catch = get_post_meta ($id,'banner_eye_catch', true);
    if($banner_link[1][1]!==''){
    ?>
        <div class="other_facilities">
        <?php
            $count = count($banner_link);
            for($i = 1;$i<=$count;$i++){
                if($banner_link[$i][1]!==''){
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
    <?php
    }
}
    ?>
</nav>