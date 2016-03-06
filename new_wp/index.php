<!-- get_header() -->
<?php get_header(); ?>
<body <?php body_class();?>>
  <div class="mdl-layout index mdl-js-layout mdl-layout--fixed-header">
    <?php get_template_part('shared/menu'); ?>
    <?php get_template_part('shared/drawer'); ?>
    <main class="mdl-layout__content">

      <!-- first view -->
      <?php if ($_GET['paged'] == 1 ):?>
      <div class="bigbox mdl-shadow--3dp">
        <div class="overall"></div>
        <div class="bigbox-inner">
          <div class="box">
            <div class="title-wrapper">
              <div id="bigbox-title">
                <span class="typing project"></span>
                <span class="typing name"></span>
              </div>
            </div>
          	<div class="bd1 bd">
          		<div class="bdT"></div>
          		<div class="bdB"></div>
          		<div class="bdR"></div>
          		<div class="bdL"></div>
          	</div>
          </div>
        </div>
      </div>
      <?php else: ?>
      <p>2ページ目以降のなんかしら？</p>
      <?php endif; ?>
      <!-- first view -->


      <!-- content -->
      <div class="content-center">
        <!-- wordpressループ -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();// 繰り返し処理開始 ?>
              <?php
                if (has_post_thumbnail()){
                  $thumbnail_id = get_post_thumbnail_id();
                  $url = wp_get_attachment_image_src( $thumbnail_id, 'large' )[0];
                } else {
                  $url = "https://www.getmdl.io/templates/blog/images/road.jpg"; // default
                }
              ?>
              <?php if (($wp_query->current_post + 1) == 1) :?>
                <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--12-col">
                    <a href="<?php the_permalink(); ?>" class="card mdl-shadow--4dp top">
                      <div class="mdl-card__media" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo $url; ?>') center / cover">
                        <div class="mdl-card__media--inner">
                          <p class="desc date">
                            <span class="desc--inner"><?php the_time(); ?><?php echo get_the_date(); ?>2016.2.14(Fri)</span>
                          </p>
                          <h2 class="title"><?php the_title(); ?></h2>
                          <div class="tags">
                            <?php if (has_tag()): ?>
                              <?php $tags = get_the_tags();?>
                              <?php foreach($tags as $i => $t): ?>
                                <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover"><?php echo $t->name; ?></span>
                                <?php if ( $i != $tags->length-1 ):?>
                                  <span class="splitter">/</span>
                                <?php endif; ?>
                              <?php endforeach; ?>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                      <div class="mdl-card__supporting-text"><?php echo mb_substr(get_the_excerpt(),0, 44);?></div>
                    </a>
                  </div>
                </div>
                <div class="mdl-grid">
              <?php else: ?>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                  <a href="<?php the_permalink(); ?>" class="card mdl-shadow--4dp">
                    <div class="mdl-card__media" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo $url; ?>') center / cover">
                      <div class="mdl-card__media--inner">
                        <p class="desc date">
                          <span class="desc--inner"><?php the_time(); ?><?php echo get_the_date(); ?>2016.2.14(Fri)</span>
                        </p>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <div class="tags">
                          <?php if (has_tag()): ?>
                            <?php $tags = get_the_tags();?>
                            <?php foreach($tags as $i => $t): ?>
                              <span class="tag tag--sm tag--transparent-white tag--no-border tag--no-hover"><?php echo $t->name; ?></span>
                              <?php if ( $i != $tags->length-1 ):?>
                                <span class="splitter">/</span>
                              <?php endif; ?>
                            <?php endforeach; ?>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <div class="mdl-card__supporting-text"><?php echo mb_substr(get_the_excerpt(),0, 44);?></div>
                  </a>
                </div>
              <?php endif; ?>
            <?php endwhile; // 繰り返し処理終了 ?>
          </div> <!-- index1で付与したmdl-gridのとじタグ-->
            <div class="pager-items">
              <?php if ( $wp_query -> max_num_pages > 1 ) : ?>
                <?php global $wp_rewrite;
                  $paginate_base = get_pagenum_link(1);
                  if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
                    $paginate_format = '';
                    $paginate_base = add_query_arg('paged','%#%');
                  }
                  else{
                    $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                    user_trailingslashit('page/%#%/','paged');;
                    $paginate_base .= '%_%';
                  }
                  echo paginate_links(array(
                    'base' => $paginate_base,
                    'format' => $paginate_format,
                    'total' => $wp_query->max_num_pages,
                    'mid_size' => 4,
                    'current' => ($paged ? $paged : 1),
                    'prev_text' => '<i class="material-icons">chevron_left</i>',
                    'next_text' => '<i class="material-icons">chevron_right</i>',
                    'class' => 'page-item'
                  )); ?>
              <?php endif;?>
            </div>
            <!-- pager -->
            <!-- /pager	 -->
        <?php else : // ここから記事が見つからなかった場合の処理 ?>
          <div class="post">
            <h1>記事はありません</h1>
            <p>お探しの記事は見つかりませんでした。</p>
          </div>
        <?php endif; ?>
        <!-- /wordpressループ -->
      </div>
      <?php get_footer(); ?>
    </main>
  </div>

  <script src="<?php bloginfo('template_url'); ?>/vendor/jquery-2.2.0.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
</body>
