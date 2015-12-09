        <!-- NEWS -->
        <div class="contents_title">
        	<img src="<?php echo get_template_directory_uri();?>/img/title/t_news.png">
        </div>

        <div class="news_area">
        	<div class="news_box">
                <?php
                $news = get_posts( array('post_type'=>'news','posts_per_page' => 10) );
                foreach ($news as $item){
                ?>
                    <!-- ニュースここから -->
                    <div class="news">
                        <div class="news_date"><?php echo date('Y/m/d',strtotime($item->post_date));?></div>
                        <div class="news_title"><?php echo $item->post_title;?></div>
                        <div class="content">
                            <?php
                            echo $item->post_content;
                            ?>
                        </div>
                    </div>
                    <!-- ニュースここまで -->
                <?php
                }
                ?>

        </div>
        </div>