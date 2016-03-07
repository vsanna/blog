<div class="mdl-layout__drawer">
  <span class="mdl-layout-title">< Project Name/></span>
  <span class="drawer--section-title">この記事をシェアする</span>
  <div class="sns-buttons">
    <span class="sns-button black"><i class="fa fa-facebook"></i></span>
    <span class="sns-button black"><i class="fa fa-twitter"></i></span>
    <span class="sns-button black hatena"></span>
    <span class="sns-button black"><i class="fa fa-get-pocket"></i></span>
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
  <span class="drawer--section-title">最近の記事</span>
  <div class="with-image mdl-navigation">
    <a class="mdl-navigation__link" href="" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo get_bloginfo('template_url')?>/images/sample_cava.jpg') center / cover">とても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトル</a>
    <a class="mdl-navigation__link" href="" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo get_bloginfo('template_url')?>/images/sample_cava.jpg') center / cover">とても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトル</a>
    <a class="mdl-navigation__link" href="" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo get_bloginfo('template_url')?>/images/sample_cava.jpg') center / cover">短いタイトル。例えば20字じゃくの場合。</a>
  </div>
  <span class="drawer--section-title">読まれている記事</span>
  <div class="with-image mdl-navigation">
    <a class="mdl-navigation__link" href="" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo get_bloginfo('template_url')?>/images/sample_cava.jpg') center / cover">とても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトル</a>
    <a class="mdl-navigation__link" href="" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo get_bloginfo('template_url')?>/images/sample_cava.jpg') center / cover">短いタイトル。例えば20字じゃくの場合。</a>
    <a class="mdl-navigation__link" href="" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo get_bloginfo('template_url')?>/images/sample_cava.jpg') center / cover">短いタイトル。例えば20字じゃくの場合。</a>
    <a class="mdl-navigation__link" href="" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('<?php echo get_bloginfo('template_url')?>/images/sample_cava.jpg') center / cover">とても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトルとても長い記事タイトル</a>
  </div>
</div>
