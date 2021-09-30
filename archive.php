<?php get_header(); ?> 

            <main>
                <div class="key_visual">
                    <div class="key_visual__layer2">
                        <h1>Menu:</h1>
                        <h2><?php single_cat_title(); ?></h2>
                        <div class="black_layer"></div> 
                        
                    </div>
                </div>

                <section id="post">
                    <div class="container">
                        <article>
                            <h1>小見出しが入ります</h1>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </article>

                        <article>
                        <?php

                        if (have_posts()) :
                            while (have_posts()) :
                                the_post(); ?>
                                <div class="cb_box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <?php the_post_thumbnail(); ?>
                                        <div class="box_ttl">
                                            <dl><?php the_title(); ?></dl>
                                                <dt>小見出しが入ります</dt>
                                                    <dd><?php the_excerpt(); ?></dd>
                                                    <div class="button_wrapper">
                                                        <button class="details_Btn"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                                                    </div>
                                        </div>
                                </div>
                            <?php endwhile;
                        else :
                            ?><p>表示する記事がありません</p>
                        <?php endif; ?>
                        </article>

                        <?php wp_pagenavi(); ?>

                    </div>
                    
                </section>
            </main>
        </div>

        <div class="flex_right">
        <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?> 