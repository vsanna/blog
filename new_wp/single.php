<!DOCTYPE html>
<html lang="ja">
  <?php get_header(); ?>
  <body>
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
              <div class="bigbox mdl-shadow--3dp">
                <div class="bigbox-inner-upper clearfix">
                  <div class="site-logo">
                    <span class="logo">< Project Name/></span>
                  </div>
                  <div class="sns-buttons">
                    <span class="sns-button white"><i class="fa fa-facebook"></i></span>
                    <span class="sns-button white"><i class="fa fa-twitter"></i></span>
                    <span class="sns-button white hatena"></span>
                    <span class="sns-button white"><i class="fa fa-get-pocket"></i></span>
                  </div>
                </div>
                <div class="bigbox-inner">
                  <h1 class="title"><?php echo get_the_title(); ?></h1>
                  <ul class="tags">
                    <li class="tag tag--sm tag--transparent-white tag--no-border">aaa</li><span class="splitter">/</span>
                    <li class="tag tag--sm tag--transparent-white tag--no-border">aaa</li><span class="splitter">/</span>
                    <li class="tag tag--sm tag--transparent-white tag--no-border">aaa</li><span class="splitter">/</span>
                    <li class="tag tag--sm tag--transparent-white tag--no-border">aaa</li><span class="splitter">/</span>
                    <?php the_category(', ') ?>
                    <?php the_tags(' ',' ','') ?>
                  </ul>
                  <span class="date"><?php echo get_the_date(); ?> 2016.1.12(Fri)</span>
                </div>
              </div>
            <!-- first view -->

            <!-- content -->
            <div class="content-center narrow">
              <div class="article">
                <?php get_template_part('shared/article_body'); ?>
                <?php get_template_part('shared/article_footer'); ?>
              </div>
              <h2 class="related-title">前後の記事</h2>
              <div class="related mdl-grid">
                <?php// previous_post_link('%link','前の記事へ',false); ?>
                <?php// next_post_link('%link','次の記事へ',false); ?>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet before">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <div class="card mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__media">
                      <div class="mdl-card__media--inner">
                        <p class="desc date">
                          <span class="desc--inner">2016.2.14(Fri)</span>
                        </p>
                        <h2 class="title">Railsでrelationを使いつつransackを高速に回すtipsRailsでrelationを使いつつransackを高速に回すtips</h2>
                        <div class="tags">
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet after">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <div class="card mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__media">
                      <div class="mdl-card__media--inner">
                        <p class="desc date">
                          <span class="desc--inner">2016.2.14(Fri)</span>
                        </p>
                        <h2 class="title">Railsでrelationを使いつつransackを高速に回すtips</h2>
                        <div class="tags">
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                $args = array(
                        'before' => '<div class="page-link">',
                        'after' => '</div>',
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                );
                wp_link_pages($args);
                ?>
              </div>
              <h2 class="related-title">関連記事</h2>
              <div class="related mdl-grid">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="card mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__media">
                      <div class="mdl-card__media--inner">
                        <p class="desc date">
                          <span class="desc--inner">2016.2.14(Fri)</span>
                        </p>
                        <h2 class="title">Railsでrelationを使いつつransackを高速に回すtipsRailsでrelationを使いつつransackを高速に回すtips</h2>
                        <div class="tags">
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="card mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__media">
                      <div class="mdl-card__media--inner">
                        <p class="desc date">
                          <span class="desc--inner">2016.2.14(Fri)</span>
                        </p>
                        <h2 class="title">Railsでrelationを使いつつransackを高速に回すtipsRailsでrelationを使いつつransackを高速に回すtips</h2>
                        <div class="tags">
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="card mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__media">
                      <div class="mdl-card__media--inner">
                        <p class="desc date">
                          <span class="desc--inner">2016.2.14(Fri)</span>
                        </p>
                        <h2 class="title">Railsでrelationを使いつつransackを高速に回すtipsRailsでrelationを使いつつransackを高速に回すtips</h2>
                        <div class="tags">
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="card mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__media">
                      <div class="mdl-card__media--inner">
                        <p class="desc date">
                          <span class="desc--inner">2016.2.14(Fri)</span>
                        </p>
                        <h2 class="title">Railsでrelationを使いつつransackを高速に回すtips</h2>
                        <div class="tags">
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                          <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover">Rails</span><span class="splitter">/</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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

      <?php get_template_part('shared/show_footer'); ?>
    </main>
  </div>
  <?php get_template_part('shared/share_scripts'); ?>
  <script src="<?php bloginfo('template_url'); ?>/vendor/jquery-2.2.0.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/show.js"></script>
  </body>
</html>
