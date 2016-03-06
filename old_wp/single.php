<?php get_header(); ?>

<div id="main">
<div class="container">
    <div class="row">

        <?php
            if (have_posts()) : // WordPress ループ
                while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
        <div class="container col-md-8">
                <div  class="col-md-12 content-box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <h1><?php echo get_the_title(); ?></h1>
                    <div class="post-meta">
                           <small><span class="post-date"><span class="glyphicon glyphicon-time"></span> <?php echo get_the_date(); ?></span></small>
                        　　<small><span class="post-author"><span class="glyphicon glyphicon-user"></span>　<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span></small>
                        　　<small><span class="glyphicon glyphicon-th-list"></span>　<?php the_category(', ') ?></small>
                        　　<small><span class="glyphicon  glyphicon-tag"></span>　<?php the_tags(' ',' ','') ?></small>
                    </div>
                    <br>
                    <hr>
                    <div class="honbun">
                        <?php the_content(); ?>


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
<?php wp_related_posts()?>

                <?php
                endwhile; // 繰り返し処理終了
                 else : // ここから記事が見つからなかった場合の処理 ?>
                            <div class="post">
                                <h2>記事はありません</h2>
                                <p>お探しの記事は見つかりませんでした。</p>
                            </div>
            <?php
            endif;
            ?>

            <ul class='pager'>
                <li class='previous'><?php previous_post_link('%link','前の記事へ',false); ?></li>
                <li class='next'><?php next_post_link('%link','次の記事へ',false); ?></li>
            </ul>

            <?php comments_template(); // コメント欄の表示 ?>
            </div>
        </div>
            <?php get_sidebar(); ?>

    </div>
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

<?php get_footer(); ?>
    
