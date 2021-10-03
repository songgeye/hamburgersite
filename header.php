<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <?php if( is_user_logged_in() ) : ?>
        <style type="text/css">
            .top-head {
            margin-top: 32px;
            }

            @media screen and (max-width: 780px) {
                .top-head {
                    margin-top: 46px;
                }

                .menuButton {
                    top: 46px;
                }
            }

            @media screen and (max-width: 600px) {
                #wpadminbar {
                    position: fixed !important;
                }
            }
        </style>
    <?php endif; ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="flex_contents">

        <div class="flex_left">
            <header>

                <div class="ttl">
                    <div class="site_title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                    </div>

                    <?php get_search_form(); ?>
                </div>
            </header>
