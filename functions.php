<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    //タイトル出力
    function Hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'Hamburger_title' );
    

    // CSS、JSの読み込み
    function Hamburger_script() {
        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.15.3/css/all.css', array(), 'v5.15.3' );
        wp_enqueue_style( 'mplus1p','//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&display=swap');
        wp_enqueue_style( 'ress',get_template_directory_uri() . '/css/ress.css' , array() , '1.0.0' );
        wp_enqueue_style( 'stylesheet',get_template_directory_uri() . '/css/stylesheet.css' , array() , '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jquery' , get_template_directory_uri() . '/js/jquery.min.js' , array() , '3.6.0');
        wp_enqueue_script( 'script' , get_template_directory_uri() . '/js/script.js' , array() , '1.0.0');
    }
    add_action( 'wp_enqueue_scripts', 'Hamburger_script' ); 

    //editor_style.css読み込み
    function Hamburger_theme_add_editor_styles() {
        add_editor_style( get_template_directory_uri() . "/css/editor-style.css" );
    }
    add_action( 'admin_init', 'hamburger_theme_add_editor_styles' );

    register_nav_menus([
            'sidebar' => 'サイドバー',
            'footer' => 'フッター'
    ]);
