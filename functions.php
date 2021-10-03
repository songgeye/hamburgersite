<?php
    //テーマサポート
    register_nav_menus();
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );

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

    //カスタム投稿（非使用）
    function create_post_type() {
        register_post_type( 'item', [ // 投稿タイプ名
            'labels' => [
                'name'          => '商品', // 管理画面右側バーの表示名
                'singular_name' => 'item',    // カスタム投稿の識別名
            ],
            'public'        => true,  // 投稿タイプをpublicにする
            'has_archive'   => true, // アーカイブ機能をつける
            'menu_position' => 5,     // 管理画面右バーの配置場所
            'menu_icon'     => 'dashicons-store', //管理画面右バーにつくアイコン設定
            'taxonomies'    => [
                'item_cat' //itemの部分は上の投稿タイプ名と同じにする
            ],
            'hierarchical'  => true,
            'supports'      => [
                'title',
                'editor',
                'thumbnail',
                'page-attributes'
            ]
            ]);

        register_taxonomy( 'item_cat', 'item', [
            'labels' => [
                'name'          => '商品カテゴリー',
                'edit_item'     =>'商品カテゴリーを編集',
            ],
            'public' => true, 
            'hierarchical' => true, 
            ]);
        }
    add_action( 'init', 'create_post_type' );
