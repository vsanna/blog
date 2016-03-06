<!-- get_header() -->
<!DOCTYPE html>
<html>
  <?php get_header(); ?>
  <body <?php body_class();?>>
    <div class="mdl-layout index mdl-js-layout mdl-layout--fixed-header">
      <?php get_menu(); ?>
      <?php get_drawer(); ?>
      <main class="mdl-layout__content">
        <!-- first view -->
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
        <!-- first view -->

        <!-- content -->
        <div class="content-center">
          <!-- wordpressループ -->
          <?php if (have_posts()) : ?>
            <div class="mdl-grid">
              <?php while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                  <a href="#" class="card mdl-shadow--4dp">
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
                    <div class="mdl-card__supporting-text">前回の補足。最速で中級者に上がるにはどうすればいいのかつらつらと考えてみました。</div>
                  </a>
                </div>
              <?php endwhile; // 繰り返し処理終了 ?>
              <div class="pager-items">
                <div class="page-item"><</div>
                <div class="page-item">1</div>
                <div class="page-item">2</div>
                <div class="page-item">3</div>
                <div class="page-item">...</div>
                <div class="page-item">21</div>
                <div class="page-item">></div>
              </div>
            </div>
          <?php else : // ここから記事が見つからなかった場合の処理 ?>
            <div class="post">
              <h1>記事はありません</h1>
              <p>お探しの記事は見つかりませんでした。</p>
            </div>
          <?php endif; ?>
          <!-- /wordpressループ -->

            <!-- <div class="mdl-grid">
              <div class="mdl-cell mdl-cell--12-col">
                <a href="#" class="card mdl-shadow--4dp top">
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
                  <div class="mdl-card__supporting-text">前回の補足。最速で中級者に上がるにはどうすればいいのかつらつらと考えてみました。</div>
                </a>
              </div>
            </div> -->
            <div class="mdl-grid">
              <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <a href="#" class="card mdl-shadow--4dp">
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
                  <div class="mdl-card__supporting-text">前回の補足。最速で中級者に上がるにはどうすればいいのかつらつらと考えてみました。</div>
                </a>
              </div>
              <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <a href="#" class="card mdl-shadow--4dp">
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
                  <div class="mdl-card__supporting-text">前回の補足。最速で中級者に上がるにはどうすればいいのかつらつらと考えてみました。</div>
                </a>
              </div>
              <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <a href="#" class="card mdl-shadow--4dp">
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
                  <div class="mdl-card__supporting-text">前回の補足。最速で中級者に上がるにはどうすればいいのかつらつらと考えてみました。</div>
                </a>
              </div>
              <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <a href="#" class="card mdl-shadow--4dp">
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
                  <div class="mdl-card__supporting-text">前回の補足。最速で中級者に上がるにはどうすればいいのかつらつらと考えてみました。</div>
                </a>
              </div>
              <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <a href="#" class="card mdl-shadow--4dp">
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
                  <div class="mdl-card__supporting-text">前回の補足。最速で中級者に上がるにはどうすればいいのかつらつらと考えてみました。</div>
                </a>
              </div>
              <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                <a href="#" class="card mdl-shadow--4dp">
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
                  <div class="mdl-card__supporting-text">前回の補足。最速で中級者に上がるにはどうすればいいのかつらつらと考えてみました。</div>
                </a>
              </div>
            </div>

        </div>
        <?php get_footer(); ?>
      </main>
    </div>

    <script src="./vendor/jquery-2.2.0.min.js"></script>
    <script src="./js/index.js"></script>
  </body>
</html>
