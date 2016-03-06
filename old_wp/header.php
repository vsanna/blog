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
