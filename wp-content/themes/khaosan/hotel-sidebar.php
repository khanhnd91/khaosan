<nav class="hostel">
    <!-- menu area -->
    <div class="menu_area">
    <div class="arrow" style="top: 92px; left: 12px;">
        <img src="<?php echo get_template_directory_uri()?>/img/menu/hostel/arrow.png">
    </div>
        <ul>
            <li><img src="<?php echo get_template_directory_uri()?>/img/menu/hostel/top.png">Top</li>
            <li><img src="<?php echo get_template_directory_uri()?>/img/menu/hostel/facilities.png">RoomType / Rates</li>
            <li><img src="<?php echo get_template_directory_uri()?>/img/menu/hostel/access.png">Access</li>
        </ul>
    </div>
    <!-- information -->
    <div class="information">
        <?php
        $common_info = get_post_meta ( get_the_ID(),'hotel_common_info', true);
        echo $common_info[1][1];
        ?>
    </div>
</nav>