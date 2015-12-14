            <!-- other -->
            <div class="other_area">
                    <div class="other">
                        <?php
                        $top = get_posts(array('post_type' => 'top'));
                        $other_link = get_post_meta ($top[0]->ID,'other_link', true);
                        $other_image = get_post_meta ($top[0]->ID,'other_image', true);
                        for($i = 1; $i<= count($other_link); $i++){
                        ?>
                            <a href="<?php echo $other_link[$i][1]?>"><div class="other_img"><img src="<?php echo $other_image[$i][1];?>"></div></a>
                        <?php
                        }
                        ?>
                    </div>
            </div>