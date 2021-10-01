<?php get_header(); ?> 
    
            <main>
                <div class="key_visual">
                    <div class="key_visual__layer3">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>

                <section id="single_page">
                    <div class="container">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                            <?php the_content(); ?>
                            <?php
                            $defaults = array(
                                'before'           => '<p>' . __( 'Pages:' ),
                                'after'            => '</p>',
                                'link_before'      => '',
                                'link_after'       => '',
                                'next_or_number'   => 'number',
                                'separator'        => ' ',
                                'nextpagelink'     => __( 'Next page' ),
                                'previouspagelink' => __( 'Previous page' ),
                                'pagelink'         => '%',
                                'echo'             => 1
                            );
                            wp_link_pages( $defaults );
                            ?>
                        </div>
                    <?php endwhile; 
                    else:
                    ?>
                    <p>表示する記事がありません</p>
                    <?php endif; ?>
                    </div>
                </section>

            </main>
        </div>

        <div class="flex_right">
        <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>