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