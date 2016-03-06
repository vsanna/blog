<?php

add_theme_support('menus');

add_theme_support( 'custom-background' );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'custom-header',$args);



add_filter( 'show_admin_bar', '__return_false' );

register_sidebar(
        array(
            'name'=>'index_drawer_archives',
            'id'=>'index_drawer_archives',
            'description'=>'index_drawer_archives',
            'before_widget'=>'<a class="mdl-navigation__link" href="">',
            'after_widget'=>'</a>',
        )
);

register_sidebar(
        array(
            'name'=>'index_menu_tag_clowd',
            'id'=>'index_menu_tag_clowd',
            'description'=>'index_menu_tag_clowd',
            'before_widget'=>'<div class="widget">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        )
);

register_sidebar(
        array(
            'name'=>'サイドバーウィジェット',
            'id'=>'sidebar1',
            'description'=>'サイドバーのウィジェットになります。',

            'before_widget'=>'<div id="widget" class="widget content-box3 ">',
            'after_widget'=>'</span></div>',
            'before_title'=>'<h3>',
            'after_title'=>'</h3><span class=""widget_side">'
        )
);

register_sidebar(
        array(
            'name'=>'フッターウィジェット1',
            'id'=>'footer1',
            'description'=>'タグ専用',

            'before_widget'=>'<div id="widget"  class="widget widget_left content-box3 ">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        )
);

register_sidebar(
        array(
            'name'=>'フッターウィジェット2',
            'id'=>'footer2',
            'description'=>'footer中央のウィジェットになります。',

            'before_widget'=>'<div id="widget"  class="widget widget_center content-box3">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        )
);

register_sidebar(
        array(
            'name'=>'フッターウィジェット3',
            'id'=>'footer3',
            'description'=>'footer右のウィジェットになります。',

            'before_widget'=>'<div id="widget"  class="widget widget_right content-box3">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        )
);



function shortcode_tw(){
    return'<a href="http://twitter.com/cvcl_r" target="_blank" >@cvcl_r</a>をふぉろーしてね！';

}

add_shortcode('tw','shortcode_tw');
//簡単なミニタグ[tw]がこれで作れた。


function my_widget_title($title){
  return '';
}
add_filter('widget_title', 'my_widget_title');

function my_archives_link($link_html){
	$link_html = preg_replace('@<li>@i', '<li class="mdl-navigation__link">', $link_html);
	return $link_html;
}
add_filter('get_archives_link', 'my_archives_link');
