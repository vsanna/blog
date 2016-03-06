<!-- get_header() -->
<!DOCTYPE html>
<html>
<head lang="ja">
    <title>
        <?
        if(is_single()):
            wp_title('|',true,'right');
        endif;
        bloginfo('name');
        ?>
    </title>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.17.2/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/github.min.css">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">

    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        wp_head(); ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!--素人がシックハックしてはじめて作ったアレなのでソースコードが汚いのはご勘弁ください-->


</head>

<body  <?php body_class();?>>

<div id="header">

<div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

            <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="navbar-collapse collapse menu">
            <?php

            $defaults = array(
            //	'theme_location'  => '',
            //	'menu'            => '',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'nav navbar-nav navbar-right',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
            );

            wp_nav_menu( $defaults );
    //        get_search_form();
            ?>
        </div><!--/.nav-collapse -->

        <p id="description"><?php bloginfo('description');?></p>
    </div>
</div>
<div class="container">
    <div style="display:inline;text-align: right">
       <form style="display:inline" method="get" id="searchform" class="form-search" action="<?php bloginfo('url'); ?>/">
                <label for="s" class="assistive-text hidden">Search</label>
                <div class="input-append">
                        <input id="s" class="span2 search-query" type="search" name="s" placeholder=" Search" value="<?php echo $_GET['s']; ?>">
                        <button class="btn btn-default searchButton" name="submit" id="searchsubmit" type="submit"><span style="color: #777777">go</span>　　　　　　　　　　　　　　</button>
                </div>
        </form>
    </div>
</div>


</div><!--headerここまで-->

<!-- /get_header() -->


<div id="main">
<div class="container">
    <div class="row">
        <?php
            if (have_posts()) : // WordPress ループ
                while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
                <div id="main" class="col-md-4 col-sm-6">
                    <div id="content" class="content-box2" id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!--col-md-offset-1 col-md-10 -->
                        <div class="top_title">
                            <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                        </div>
                        <p class="post-date"><small><span class="glyphicon glyphicon-time"></span> <?php echo get_the_date(); ?></p>
                        <p class="post-date"><span class="glyphicon glyphicon-th-list"></span> <?php the_category(', ') ?></small></p>
                        <hr id="top_hr">

                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                                  <?php the_post_thumbnail(); ?>
                                </a>
                            <?php else: ?>
                                <!--NO Image画像表示-->
                                <!--<img src="<?php echo get_template_directory_uri();?>/images/noimage.jpg" width="auto" height="150px">-->
                                <a href="<?php the_permalink(); ?>"><img src="http://vsanna.sakura.ne.jp/wp/wp-content/uploads/2014/05/imgres.jpg" width="170px" height="170px"></a>

                            <?php endif; ?>



                        <p class="substr"><a href="<?php the_permalink(); ?>"><?php echo mb_substr(get_the_excerpt(),0, 44);?><br></a></p>
                        <p class="read-more"><a href="<?php the_permalink(); ?>">read more!</a></p>

                        <div class="tag_and_category">
<!--                            <p><small><span class="glyphicon glyphicon-th-list"></span> <?php // the_category(', ') ?></small></p>-->
                            <p><small><span class="glyphicon  glyphicon-tag"></span> <?php the_tags(' ',' ','') ?></small></p>
                        </div>
                    </div>
                </div>
                <?php
                endwhile; // 繰り返し処理終了
                 else : // ここから記事が見つからなかった場合の処理 ?>
                            <div class="post">
                                <h1>記事はありません</h1>
                                <p>お探しの記事は見つかりませんでした。</p>
                            </div>
            <?php
            endif;
            ?>
        </div>



    <!-- pager -->
    <?php
    if ( $wp_query -> max_num_pages > 1 ) : ?>
        <ul class='pager'>
          <li class='previous'><?php next_posts_link('&laquo; 古い記事へ'); ?></a></li>
          <li class='next'><?php previous_posts_link('新しい記事へ &raquo;'); ?></a></li>
        </ul>

    <?php
    endif;
    ?>
    <!-- /pager	 -->

    </div><!--container終わり-->
</div><!--main終わり-->

<!-- get_footer() -->
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
       if ( is_active_sidebar( 'footer1' ) ) :
       dynamic_sidebar( 'footer1' );

       else: ?>
            <div class="widget">
                    <h3>No Widget</h3>
                    <p>ウィジットは設定されていません。</p>
            </div>
       <?php
       endif;
       ?>
            </div>
             <div class="col-md-4">
                <?php
       if ( is_active_sidebar( 'footer2' ) ) :
       dynamic_sidebar( 'footer2' );

       else: ?>
            <div class="widget">
                    <h3>No Widget</h3>
                    <p>ウィジットは設定されていません。</p>
            </div>
       <?php
       endif;
       ?>
            </div>
             <div class="col-md-4">
                <?php
       if ( is_active_sidebar( 'footer3' ) ) :
       dynamic_sidebar( 'footer3' );

       else: ?>
            <div class="widget">
                    <h3>No Widget</h3>
                    <p>ウィジットは設定されていません。</p>
            </div>
       <?php
       endif;
       ?>
            </div>
        </div>
    </div>





<div class="container site-info">
    &copy; 2014 - <?php echo date_i18n( 'Y' ); ?> vsanna
    <!-- .site-info -->
</div>



</div><!--footer終わり-->

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">jQuery(function() { 
    jQuery("a").click(function(e) {       
        var ahref = jQuery(this).attr('href');
        if (ahref.indexOf("vsanna.sakura.ne.jp") != -1 || ahref.indexOf("http") == -1 ) {
            ga('send', 'event', '内部リンク', 'クリック', ahref);} 
        else {
            ga('send', 'event', '外部リンク', 'クリック', ahref);}
        });
    });
</script>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.2/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
    </body>
</html>
<!-- get_footer() -->
