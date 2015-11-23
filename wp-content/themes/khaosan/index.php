<?php
get_header();
?>
    <!-- main area -->
    <article>
            <!-- topimg -->
            <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/top/top2.jpg" alt="">
                            <div class="top_img_tittle">
                                    Recruitment Archives
                                    <p class="top_img_dis">
                                            We have many staff who come from different countries,<br>
                                            and they enjoy their life together at Khaosan Tokyo/Kyoto Guest House.
                                    </p>
                            </div>
                    </div>
                    <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/top/top3.jpg" alt="">
                            <div class="top_img_tittle">
                                    KHAOSAN KYOTO GUESTHOUSE
                                    <p class="top_img_dis">
                                            No.3 Hostel in Asia 2013 & No.1 Hostel in Japan 2012<br>
                                            Perfect Location": 1 min from Kawaramachi Sta.<br>
                                            Convenient Access" to Major Touristic Sights<br>
                                            6 Beds Mixed/Female Dorm" Recommended<br>
                                            Tatami Living Room" and Excellent Facilities
                                    </p>
                            </div>
                    </div>
                    <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/top/top1.jpg" alt="">
                            <div class="top_img_tittle">
                                    KHAOSAN TOKYO ORIGAMI
                                    <p class="top_img_dis">
                                            Handicrafts Decorative Hostel<br>
                                            Amazing city lights ＆ panorama<br>
                                            Event gallery ＆ cozy common area<br>
                                            Japanese style private rooms recommended
                                    </p>
                            </div>
                    </div>
                    <div class="item">
                            <img src="<?php echo get_template_directory_uri()?>/img/top/khaosan_staff.jpg" alt="">
                            <div class="top_img_tittle">
                                    KHAOSAN TOKYOSAMURAI CAPSULE
                                    <p class="top_img_dis">
                                            CHA-SHITSU STYLE DORM FOR SAMURAI<br>
                                            Functional Capsule Style Bed<br>
                                            Gorgeous Tatami Lounge & Kitchen<br>
                                            Great location & Fabulous City View
                                    </p>
                            </div>
                    </div>
            </div>

            <!-- select -->
            <div id="button_area">
                    <form name="selbox">
                            <select class="area">
                                    <option value="#">Area</option>
                                    <option value="#">TOKYO</option>
                                    <option value="#">KYOTO</option>
                                    <option value="#">SAPPORO</option>
                            </select>
                            <select class="check_in">
                                    <option value="#">Check in</option>
                            </select>
                            <select class="check_out">
                                    <option value="#">Check out</option>
                            </select>
                            <select class="guest">
                                    <option value="#">Guest</option>
                                    <option value="#">1</option>
                                    <option value="#">2</option>
                                    <option value="#">3</option>
                                    <option value="#">4</option>
                                    <option value="#">5</option>
                                    <option value="#">6</option>
                                    <option value="#">7</option>
                                    <option value="#">8</option>
                                    <option value="#">9</option>
                                    <option value="#">10</option>
                            </select>
                            <!--
                            <select class="currency">
                                    <option value="#">Currency</option>
                                    <option value="#">JPY</option>
                                    <option value="#">USD</option>
                            </select>
                            -->
                            <input type=button onClick="top.location.href=sel3.value" value="search" class="article_button">
                    </form>
            </div>

            <!-- TODO:【wordpressにてホテルの追加・更新】 -->
            <!-- HOSTEL -->
            <div class="contents_title">
                    <img src="<?php echo get_template_directory_uri()?>/img/title/t_hostel.png">
            </div>
            <div class="imgbox_back">
                    <div class="imgbox_area">
                            <!-- TODO:【wordpressにてホテル詳細の更新】 -->
                            <!-- ホステル情報ここから -->
                            <a href="#">
                                    <div class="imgbox">
                                            <div class="area" style="background: #ff4d4d">TOKYO</div>
                                            <img src="<?php echo get_template_directory_uri()?>/img/hostels/original.jpg">
                                            <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/icon/man.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/couple.png"></div>
                                            <div class="hostel_name">
                                                    KHAOSAN TOKYO<br>
                                                    ORIGINAL
                                            </div>
                                    </div>
                            </a>
                            <!-- ホステル情報ここまで -->

                            <!-- TODO:【wordpressにてホテル詳細の更新】 -->
                            <!-- ホステル情報ここから -->
                            <a href="#">
                                    <div class="imgbox">
                                            <div class="area" style="background: #ff4d4d">TOKYO</div>
                                            <img src="<?php echo get_template_directory_uri()?>/img/hostels/kabuki.jpg">
                                            <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/icon/man.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/couple.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/group.png"></div>
                                            <div class="hostel_name">
                                                    KHAOSAN TOKYO<br>
                                                    KABUKI
                                            </div>
                                    </div>
                            </a>
                            <!-- ホステル情報ここまで -->

                            <!-- TODO:【wordpressにてホテル詳細の更新】 -->
                            <!-- ホステル情報ここから -->
                            <a href="#">
                                    <div class="imgbox">
                                            <div class="area" style="background: #ff4d4d">TOKYO</div>
                                            <img src="<?php echo get_template_directory_uri()?>/img/hostels/world.jpg">
                                            <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/icon/car_rental.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/group.png"></div>
                                            <div class="hostel_name">
                                                    KHAOSAN WORLD<br>
                                                    ASAKUSA
                                            </div>
                                    </div>
                            </a>
                            <!-- ホステル情報ここまで -->

                            <!-- TODO:【wordpressにてホテル詳細の更新】 -->
                            <!-- ホステル情報ここから -->
                            <a href="#">
                                    <div class="imgbox">
                                            <div class="area" style="background: #ff4d4d">TOKYO</div>
                                            <img src="<?php echo get_template_directory_uri()?>/img/hostels/labo.jpg">
                                            <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/icon/man.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/couple.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/group.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/children.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/bar.png"></div>
                                            <div class="hostel_name">
                                                    KHAOSAN TOKYO<br>
                                                    LABORATORY
                                            </div>
                                    </div>
                            </a>
                            <!-- ホステル情報ここまで -->

                            <!-- TODO:【wordpressにてホテル詳細の更新】 -->
                            <!-- ホステル情報ここから -->
                            <a href="#">
                                    <div class="imgbox">
                                            <div class="area" style="background: #ff4d4d">TOKYO</div>
                                            <img src="<?php echo get_template_directory_uri()?>/img/hostels/origami.jpg">
                                            <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/icon/man.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/couple.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/group.png"></div>
                                            <div class="hostel_name">
                                                    KHAOSAN TOKYO<br>
                                                    ORIGAMI
                                            </div>
                                    </div>
                            </a>
                            <!-- ホステル情報ここまで -->

                            <!-- TODO:【wordpressにてホテル詳細の更新】 -->
                            <!-- ホステル情報ここから -->
                            <a href="#">
                                    <div class="imgbox">
                                            <div class="area" style="background: #ff4d4d">TOKYO</div>
                                            <img src="<?php echo get_template_directory_uri()?>/img/hostels/samurai.jpg">
                                            <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/icon/man.png"></div>
                                            <div class="hostel_name">
                                                    KHAOSAN TOKYO<br>
                                                    SAMURAI CAPSULE
                                            </div>
                                    </div>
                            </a>
                            <!-- ホステル情報ここまで -->

                            <!-- TODO:【wordpressにてホテル詳細の更新】 -->
                            <!-- ホステル情報ここから -->
                            <a href="#">
                                    <div class="imgbox">
                                            <div class="area" style="background: #8C8C00">KYOTO</div>
                                            <img src="<?php echo get_template_directory_uri()?>/img/hostels/kyoto.jpg">
                                            <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/icon/man.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/couple.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/group.png"></div>
                                            <div class="hostel_name">
                                                    KHAOSAN KYOTO<br>
                                                    GUESTHOUSE
                                            </div>
                                    </div>
                            </a>
                            <!-- ホステル情報ここまで -->

                            <!-- TODO:【wordpressにてホテル詳細の更新】 -->
                            <!-- ホステル情報ここから -->
                            <a href="#">
                                    <div class="imgbox">
                                            <div class="area" style="background: #8C8C00">KYOTO</div>
                                            <img src="<?php echo get_template_directory_uri()?>/img/hostels/kyoto_shiater.jpg">
                                            <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/icon/man.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/couple.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/bar.png"></div>
                                            <div class="hostel_name">
                                                    KHAOSAN KYOTO<br>
                                                    THEATER
                                            </div>
                                    </div>
                            </a>
                            <!-- ホステル情報ここまで -->

                            <!-- TODO:【wordpressにてホテル詳細の更新】 -->
                            <!-- ホステル情報ここから -->
                            <a href="#">
                                    <div class="imgbox">
                                            <div class="area" style="background: #003366">SAPPORO</div>
                                            <img src="<?php echo get_template_directory_uri()?>/img/hostels/sapporo.jpg">
                                            <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/icon/man.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/couple.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/group.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/children.png"></div>
                                            <div class="hostel_name">
                                                    INTERNATIONAL HOSTEL<br>
                                                    KHAOSAN SAPPORO
                                            </div>
                                    </div>
                            </a>
                            <!-- ホステル情報ここまで -->

                            <!-- TODO:【wordpressにてホテル詳細の更新】 -->
                            <!-- ホステル情報ここから -->
                            <a href="#">
                                    <div class="imgbox">
                                            <div class="area" style="background: #D96D00">ATAMI</div>
                                            <img src="<?php echo get_template_directory_uri()?>/img/hostels/comingsoon.jpg">
                                            <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/icon/man.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/couple.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/group.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/children.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/hotsprings.png"></div>
                                            <div class="hostel_name">
                                                    KHAOSAN ATAMI
                                            </div>
                                    </div>
                            </a>
                            <!-- ホステル情報ここまで -->

                            <!-- TODO:【wordpressにてホテル詳細の更新】 -->
                            <!-- ホステル情報ここから -->
                            <a href="#">
                                    <div class="imgbox">
                                            <div class="area" style="background: #004D14">KANAZAWA</div>
                                            <img src="<?php echo get_template_directory_uri()?>/img/hostels/comingsoon.jpg">
                                            <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/icon/man.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/couple.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/group.png"><img src="<?php echo get_template_directory_uri()?>/img/icon/children.png"></div>
                                            <div class="hostel_name">
                                                    KHAOSAN KANAZAWA
                                            </div>
                                    </div>
                            </a>
                            <!-- ホステル情報ここまで -->

                    </div>
            </div>

            <!-- MAP -->
            <div class="map">
                    <!--
                    <div class="contents_title"><img src="<?php echo get_template_directory_uri()?>/img/title/t_map.png"></div>
                    -->
                    <div id="map_canvas">Loading...</div>
                    <ul>
                            <li>
                                    TOKYO
                                    <ul>
                                            <li><a href="javascript:map_click(0)">KHAOSAN TOKYOSAMURAI CAPSULE</a></li>
                                            <li><a href="javascript:map_click(1)">KHAOSAN TOKYO ORIGAMI</a></li>
                                            <li><a href="javascript:map_click(2)">KHAOSAN WORLD ASAKUSA</a></li>
                                            <li><a href="javascript:map_click(3)">KHAOSAN TOKYO LABORATORY</a></li>
                                            <li><a href="javascript:map_click(4)">KHAOSAN TOKYO KABUKI</a></li>
                                            <li><a href="javascript:map_click(5)">KHAOSAN TOKYO ORIGINAL</a></li>
                                    </ul>
                            </li>
                            <li>
                                    KYOTO
                                    <ul>
                                            <li><a href="javascript:map_click(6)">KHAOSAN KYOTO THEATER</a></li>
                                            <li><a href="javascript:map_click(7)">KHAOSAN KYOTO GUESTHOUSE</a></li>
                                    </ul>
                            </li>
                            <li>
                                    SAPPORO
                                    <ul>
                                            <li><a href="javascript:map_click(8)">INTERNATIONAL HOSTEL KHAOSAN SAPPORO</a></li>
                                    </ul>
                            </li>
                    </ul>
                    <div class="map_text">
                            <strong>Airport =============== TOKYO/ASAKUSA</strong><br>
                            <br>
                            [To/From Narita Airport]<br>
                            Direct train: 1,240Yen / 60min<br>
                            Airport Limousine: 2,700JPY / 60-120min<br>
                            * 1-minute walk to a bus stop from our ryokan/hostel<br>
                            * 2 buses/day to each directions<br>
                            <br>
                            [To/From Haneda Airport]<br>
                            Direct train: 640Yen / 40min<br>
                            Airport Limousine: 900JPY / 20-65min<br>
                            * 1-minute walk to a bus stop from our ryokan/hostel
                    </div>
                    <div class="map_arrow">▲</div>
            </div>

            <!-- NEWS -->
            <?php get_template_part( 'news' );?>
            <!-- other -->
            <?php get_template_part( 'other' );?>
    </article>
<?php
get_footer();
?>
