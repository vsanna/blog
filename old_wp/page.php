<?php get_header(); ?>

<div id="main">
<div class="container">
    <div class="row">


        <?php
            if (have_posts()) : // WordPress ループ
                while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
        <div class="container col-md-8">
                <div  class="col-md-12 content-box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"rel="bookmark"><?php echo get_the_title(); ?></a></h2>
                    <hr>
                    <p class="honbun"><?php the_content(); ?></p>
                    <hr>
        <?php
        endwhile; // 繰り返し処理終了
         else : // ここから記事が見つからなかった場合の処理 ?>
                <div class="post">
                    <h2>記事はありません</h2>
                    <p>お探しの記事は見つかりませんでした。</p>
        <?php
        endif;
        ?>
                </div>
                </div>

        <?php get_sidebar(); ?>
          </div>


    </div>
</div><!--container終わり-->
</div><!--main終わり-->

<?php get_footer(); ?>
