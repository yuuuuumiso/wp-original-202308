<?php

//設定をまとめてwebst8_setup()関数に定義
function webst8_setup() {
  //titleタグ動的に追加
   add_theme_support('title-tag');
 //アイキャッチ画像をON
   add_theme_support( 'post-thumbnails' );
  //メニュー機能をON
   add_theme_support( 'menus');
}
add_action( 'after_setup_theme', 'webst8_setup' );
//after_setup_themeアクションフック※に登録します。

/*メニュー機能を管理画面から編集できるように
左の単語とナビ部分の単語は一致していないと駄目
右の単語は管理画面上の表示なのでなんでもOK
※管理画面からメニューを登録して、wp_nav関数で呼び出す方法もある：教科書P116
*/
function register_my_menus() {
  register_nav_menus(
   array(
   'gloval-navigation' => 'ヘッダーメニュー',
   'footer-navigation' => 'フッターメニュー（左）',
   'footer-navi' => 'フッターメニュー（中）',
   )
  );
}
add_action( 'after_setup_theme', 'register_my_menus' );

/*ウィジェット登録
下記がないと管理画面に「ウィジェット」が表示されない
https://www.youtube.com/watch?v=fyHZH526wpo
*/
function my_widgets_init() {

  register_sidebar( array(
		'name' => 'フッター ウィジェット',
		'id' => 'footer_widget01',
    'description' => 'フッターにコンテンツを表示します。',
    'before_widget'=>'
    <div id="%1$s" class="%2$s sidebar-wrapper">',
    'after_widget'=>'</div>',
    'before_title' => '<h5 class="sidebar-title">',
    'after_title' => '</h5>'
  ) );

}
add_action( 'widgets_init', 'my_widgets_init' );


// cssをhead内ではなく、function.phpから動的に読み込むパターン
function add_files() {
//css
  wp_enqueue_style( 'my-template-style', get_stylesheet_uri() );
}

  wp_enqueue_style(
    'slick-css01',
    '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
    array(), wp_get_theme()->get('Version'));

  wp_enqueue_style(
    'slick-css02',
    'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css',
    array(), wp_get_theme()->get('Version'));

//jsファイルやjqueryも「wp_enqueue_script」で読めるが、その場合$が使えなくなる
add_action( 'wp_enqueue_scripts', 'add_files' );

//抜粋文を50文字に減らす
function change_excerpt_length( $length ) {
  return 50;
}
add_filter( 'excerpt_length', 'change_excerpt_length', 999 );

function change_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'change_excerpt_more' );
