<?php get_header(); ?> 

            <main>
                <div class="key_visual">
                    <div class="key_visual__layer key_visual__front_page">
                        <h1>ダミーサイト</h1>
                    </div>   
                </div>

                <section id="stay">
                    <div class="container">
                        <article>
                            <div class="take_out">
                            <?php 
                                $cat_take_out = get_category_by_slug('take_out');
                                $take_out_id = $cat_take_out->term_id;

                                $cat_eat_in = get_category_by_slug('eat_in');
                                $eat_in_id = $cat_eat_in->term_id;
                            ?>
                                <a href="<?php echo esc_url(get_category_link( $take_out_id )); ?>"><h1>Take Out<hr color=#fff></h1></a>
                                <ul class="l_box">
                                    <li class="box_ttl">
                                            <h2>Take OUT</h2>
                                                <p>当店のテイクアウトで利用できる商品を掲載しています</p> 
                                    </li>
                                    <li class="box_ttl">
                                            <h2>Take OUT</h2>
                                                <p>当店のテイクアウトで利用できる商品を掲載しています</p> 
                                    </li>
                                </ul>
                            </div>
                        </article>

                        <article>
                            <div class="eat_in">
                                <a href="<?php echo esc_url(get_category_link( $eat_in_id )); ?>"><h1>Eat In<hr color=#fff></h1></a>
                                <ul class="l_box">
                                    <li class="box_ttl">
                                            <h2>Take OUT</h2>
                                                <p>当店のテイクアウトで利用できる商品を掲載しています</p> 
                                    </li>
                                    <li class="box_ttl">
                                            <h2>Take OUT</h2>
                                                <p>当店のテイクアウトで利用できる商品を掲載しています</p> 
                                    </li>
                                </ul>
                            </div>
                        </article>

                    </div>
                </section>

                <section id="map">
                    <div class="map__bg">
                        <div class="map__layer map__txt">
                            <h3>見出しが入ります<hr color=#fff></h3>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>

                        <div class="map__layer google_map">
                            <div class="map_wrap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7479754723117!2d139.7432388508119!3d35.658580480102465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1625593016167!5m2!1sja!2sjp" width="375" height="691" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>

        <div class="flex_right">
        <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?> 