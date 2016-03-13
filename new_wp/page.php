<!DOCTYPE html>
<html lang="ja">
  <?php get_header(); ?>
  <body class="page-<?php echo get_query_var('paged');?> page">
  <style>
  .mdl-card__body {
    padding: 20px 5%;
    font-size: 1rem;
  }

  .mdl-card.mdl-shadow--2dp.article {
      width: 100%;
      margin-top: 19px;
  }

  .article .mdl-card__body h2 {
      font-size: 2rem;
      border-bottom: 1px solid;
      line-height: 2.5rem;
      margin-bottom: 10px;
  }

  .article .mdl-card__body h3 {
      font-size: 1.5rem;
      line-height: 2.5rem;
      margin-bottom: 10px;
      font-weight: bold;
      color: rgba(130,130,130,0.7);
  }
  .article {
      padding: 24px;
  }
  </style>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header show">
    <header class="mdl-layout__header custom">
      <!-- drawer_toggle_buttonのみ -->
    </header>
    <?php get_template_part('shared/show_drawer'); ?>

    <main class="mdl-layout__content">
      <!-- wordpressループ -->
      <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
            <!-- first view -->
            <?php
              if (has_post_thumbnail()){
                $thumbnail_id = get_post_thumbnail_id();
                $url = wp_get_attachment_image_src( $thumbnail_id, 'large' )[0];
              } else {
                $url = "https://www.getmdl.io/templates/blog/images/road.jpg"; // default
              }
            ?>
              <div class="bigbox mdl-shadow--3dp" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo $url; ?>') center / cover">
                <div class="bigbox-inner-upper clearfix">
                  <div class="site-logo">
                    <span class="logo"><a class="logo-inner" href="<?php echo home_url(); ?>">< Project Name/></a></span>
                  </div>
                  <div class="sns-buttons">
                    <?php $share_title =  urlencode(get_the_title());?>
                    <?php $share_url =  (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . urlencode($_SERVER["REQUEST_URI"]);?>
                    <span class="sns-button white"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url;?>"><i class="fa fa-facebook"></i></a></span>
                    <span class="sns-button white"><a target="_blank" href="https://twitter.com/share?text=<?php echo $share_title?>&url=<?php echo $share_url;?>"><i class="fa fa-twitter"></i></a></span>
                    <span class="sns-button white hatena">
                      <a target="_blank"
                         href="http://b.hatena.ne.jp/entry/<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]?>"
                         title="このエントリーをはてなブックマークに追加">B</a>
                    </span>
                    <!-- <span class="sns-button black"><i class="fa fa-get-pocket"></i></span> -->
                  </div>
                </div>
                <div class="bigbox-inner">
                  <h1 class="title"><?php echo get_the_title(); ?></h1>
                  <ul class="tags">
                    <?php if (has_tag()): ?>
                      <?php $tags = get_the_tags();?>
                      <?php foreach($tags as $i => $t): ?>
                        <a href="#"><li href="#" class="tag tag--sm tag--transparent-white tag--no-border"><?php echo $t->name; ?></li></a>
                        <?php if ( $i != $tags->length-1 ):?>
                          <span class="splitter">/</span>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </ul>
                  <span class="date"><?php echo get_the_date("Y.n.j(D)"); ?></span>
                </div>
              </div>
            <!-- first view -->

            <!-- content -->
            <div class="content-center narrow">
              <div class="article">
                <?php get_template_part('shared/article_body'); ?>
              </div>
            </div>
            <!-- content -->
          <?php endwhile; // 繰り返し処理終了 ?>
      <?php else : // ここから記事が見つからなかった場合の処理 ?>
        <div class="post">
          <h1>記事はありません</h1>
          <p>お探しの記事は見つかりませんでした。</p>
        </div>
      <?php endif; ?>
      <!-- /wordpressループ -->

      <?php get_footer(); ?>
    </main>
  </div>
  <?php get_template_part('shared/share_scripts'); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery-2.2.0.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/show.min.js"></script>
  </body>
</html>
