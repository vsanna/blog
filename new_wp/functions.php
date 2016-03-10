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


function my_widget_title($title){
  return '';
}
add_filter('widget_title', 'my_widget_title');

function my_archives_link($link_html){
	$link_html = preg_replace('@<li>@i', '<li class="mdl-navigation__link">', $link_html);
	return $link_html;
}
add_filter('get_archives_link', 'my_archives_link');


// short_code
function shortcode_tw($url){
  $html = file_get_contents($url);
  $dom = new DOMDocument();
  $dom = $dom->loadHTML($html);
  return $dom;
}

add_shortcode('tw','shortcode_tw');
//簡単なミニタグ[tw]がこれで作れた。


function shortcode_pre($args, $content){
  $lang = $args[0];

$output = <<< HTML
<div class="code-wrapper">
  <div class="code-inner">
    <span class="lang-label">{$lang}</span>
    <pre><code class="ruby">{$content}</code></pre>
  </div>
</div>
HTML;

  return $output;
}
add_shortcode('pre','shortcode_pre');

function show_comments($root_comment, $is_outer){

$children = get_comments(array('parent' => $root_comment->comment_ID));
// 子コメントでかつ最も外側で読んでいる場合は表示しない
if ( ($root_comment->comment_parent != '0') && $is_outer ){
  return;
}
if (!is_null($children)){
  $children_coutput = '<ul class="mdl-list comments child">';
  foreach( $children as $cc ){
    $children_coutput = $children_coutput.show_comments($cc, false);
  }
  $children_coutput = $children_coutput.'</ul>';
}
$home_url = home_url();
$author = empty($root_comment->comment_author) ? '匿名' : $root_comment->comment_author;

$output = <<< HTML
<li class="mdl-list__item mdl-list__item--three-line" id="{$root_comment->comment_ID}">
  <span class="mdl-list__item-primary-content">
    <i class="material-icons mdl-list__item-avatar">person</i>
    <span class="author">{$author}</span>
    <span class="mdl-list__item-text-body">{$root_comment->comment_content}</span>
    {$children_coutput}
  </span>
  <span class="mdl-list__item-secondary-content reply">
    <button data-replytocom="{$root_comment->comment_ID}" data-commentauthor="{$author}" class="replytocom mdl-list__item-secondary-action mdl-button mdl-js-button mdl-button--icon" rel='nofollow'>
       <i class="material-icons">reply</i>
    </button>
  </span>
</li>
HTML;

return $output;
}

add_filter('show_comments', 'show_comments');
