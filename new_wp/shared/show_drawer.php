<div class="mdl-layout__drawer">
  <span class="mdl-layout-title"><a class="site-name site-name__black site-name__lg" href="<?php echo home_url(); ?>">< Project Name/></a></span>
  <span class="drawer--section-title">この記事をシェアする</span>
  <div class="sns-buttons">
    <?php $share_title =  urlencode(get_the_title());?>
    <?php $share_url =  (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . urlencode($_SERVER["REQUEST_URI"]);?>
    <span class="sns-button black"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url;?>"><i class="fa fa-facebook"></i></a></span>
    <span class="sns-button black"><a target="_blank" href="https://twitter.com/share?text=<?php echo $share_title?>&url=<?php echo $share_url;?>"><i class="fa fa-twitter"></i></a></span>
    <span class="sns-button black hatena">
      <a target="_blank"
         href="http://b.hatena.ne.jp/entry/<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]?>"
         title="このエントリーをはてなブックマークに追加">B</a>
    </span>
    <!-- <span class="sns-button black"><i class="fa fa-get-pocket"></i></span> -->
  </div>
  <span class="drawer--section-title">サイト内を検索する</span>
  <div class="content-center-mobile">
    <dev class="search">
      <form method="get" action="<?php bloginfo('url'); ?>/">
        <div class="mdl-textfield mdl-js-textfield thin">
          <input class="mdl-textfield__input" type="text" id="search_drawer" name="s" value="<?php echo $_GET['s']; ?>">
          <label class="mdl-textfield__label" for="search_drawer">Text...</label>
          <label class="mdl-button mdl-js-button mdl-button--icon search-icon" for="search">
            <i class="material-icons">search</i>
          </label>
        </div>
      </form>
    </dev>
  </div>
  <span class="drawer--section-title with-border">最近の記事</span>
  <div class="mdl-navigation">
    <?php $args = array(
    	'posts_per_page'   => 5,
    	'offset'           => 0,
    	'category'         => '',
    	'category_name'    => '',
    	'orderby'          => 'date',
    	'order'            => 'DESC',
    	'include'          => '',
    	'exclude'          => '',
    	'meta_key'         => '',
    	'meta_value'       => '',
    	'post_type'        => 'post',
    	'post_mime_type'   => '',
    	'post_parent'      => '',
    	'author'	   => '',
    	'post_status'      => 'publish',
    	'suppress_filters' => true
      );
      $posts_array = get_posts( $args );
    ?>
    <?php foreach ($posts_array as $p): ?>
      <?php
        $post_id = $p->ID;
        $post_title = $p->post_title;
        $post_link = $p->guid;
      ?>
        <a class="mdl-navigation__link" href="<?= $post_link ?>"><?= $post_title ?></a>
    <?php endforeach; ?>
  </div>
  <span class="drawer--section-title with-border">読まれている記事</span>
  <div class="mdl-navigation">
    <!-- HTML : popular_entries -->
    <!-- 人気記事を表示する -->
    <div id="popular_entries_feed" align="center">Now Loading...</div>
  </div>
</div>
