<header class="mdl-layout__header custom">
  <!-- Top row, always visible -->
  <div class="mdl-layout__header-row">
    <!-- Title -->
    <span class="mdl-layout-title left_align"><a href="/"><?php bloginfo('name'); ?></a></span>
    <div class="mdl-layout-spacer"></div>
    <!-- Navigation -->
    <nav class="mdl-navigation hide-mobile">
      <a class="mdl-navigation__link" href="">Top</a>
      <a class="mdl-navigation__link" href="">About</a>
      <a class="mdl-navigation__link" href="">Contact</a>
      <a class="mdl-navigation__link" href="">Github</a>
      <a class="mdl-navigation__link js-toggle-menu-container-bottom" href="#">☓</a>
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
        ?>
    </nav>
  </div>
</header>
<div class="menu-container-bottom hide-mobile">
  <div class="mdl-grid content-center">
    <div class="mdl-cell--8-col mdl-cell--8-col-tablet">
      <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#starks-panel" class="mdl-tabs__tab is-active">Category</a>
            <a href="#lannisters-panel" class="mdl-tabs__tab">Archives</a>
            <a href="#targaryens-panel" class="mdl-tabs__tab">Targaryens</a>
        </div>
        <div class="mdl-tabs__panel is-active" id="starks-panel">
          <a href="#" class="tag tag--md tag--transparent-black tag--no-border">カテゴリ1</a>
          <a href="#" class="tag tag--md tag--transparent-black tag--no-border">カテゴリ1</a>
          <a href="#" class="tag tag--md tag--transparent-black tag--no-border">カテゴリ1</a>
        </div>
        <div class="mdl-tabs__panel" id="lannisters-panel">
          <ul class="demo-list-icon mdl-list">
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
              <i class="material-icons mdl-list__item-icon">person</i>
              Bryan Cranston
          </span>
            </li>
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
              <i class="material-icons mdl-list__item-icon">person</i>
              Aaron Paul
            </span>
            </li>
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
              <i class="material-icons mdl-list__item-icon">person</i>
              Bob Odenkirk
            </span>
            </li>
          </ul>
        </div>
        <div class="mdl-tabs__panel" id="targaryens-panel">
          <ul class="demo-list-icon mdl-list">
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
              <i class="material-icons mdl-list__item-icon">person</i>
              Bryan Cranston
          </span>
            </li>
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
              <i class="material-icons mdl-list__item-icon">person</i>
              Aaron Paul
            </span>
            </li>
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
              <i class="material-icons mdl-list__item-icon">person</i>
              Bob Odenkirk
            </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="mdl-cell--4-col mdl-cell--8-col-tablet menu-container-bottom--right">
      <dev class="search">
        <form action="#">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="search-2">
            <label class="mdl-textfield__label" for="search-2">Text...</label>
            <label class="mdl-button mdl-js-button mdl-button--icon search-icon" for="search" data-upgraded=",MaterialButton">
              <i class="material-icons">search</i>
            </label>
          </div>
        </form>
      </dev>
    </div>
  </div>
</div>
