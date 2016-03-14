<header class="mdl-layout__header custom">
  <!-- Top row, always visible -->
  <div class="mdl-layout__header-row">
    <!-- Title -->
    <span class="mdl-layout-title left_align"><a href="/wp/">< Project Name/></a></span>
    <div class="mdl-layout-spacer"></div>
    <!-- Navigation -->
    <nav class="mdl-navigation hide-mobile">
      <a class="mdl-navigation__link" href="/wp/">Top</a>
      <a class="mdl-navigation__link" href="/wp/profile">About</a>
      <a class="mdl-navigation__link" href="/wp/contact">Contact</a>
      <a target="_blank" class="mdl-navigation__link" href="https://github.com/vsanna">Github</a>
      <a class="mdl-navigation__link js-toggle-menu-container-bottom toggle-menu-container-bottom" href="#"><i class="material-icons">close</i></a>
    </nav>
  </div>
</header>
<div class="menu-container-bottom hide-mobile">
  <div class="mdl-grid content-center">
    <div class="mdl-cell--8-col mdl-cell--8-col-tablet">
      <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#menu_categories" class="mdl-tabs__tab is-active">Category</a>
            <a href="#menu_tags" class="mdl-tabs__tab">Tag</a>
            <a href="#menu_archives" class="mdl-tabs__tab">Archives</a>
        </div>
        <div class="mdl-tabs__panel is-active" id="menu_categories">
          <?php $categories = get_categories(); ?>
          <?php foreach($categories as $cat) : ?>
            <a href="/category/<?php echo $cat->name; ?>" class="tag tag--sm tag--transparent-black"><?php echo $cat->name; ?> (<?php echo $cat->count; ?>)</a>
          <?php endforeach; ?>
        </div>
        <div class="mdl-tabs__panel" id="menu_tags">
          <?php $tags = get_tags(); ?>
          <?php foreach($tags as $tag) : ?>
            <a href="/category/<?php echo $tag->name; ?>" class="tag tag--sm tag--transparent-black"><?php echo $tag->name; ?> (<?php echo $tag->count; ?>)</a>
          <?php endforeach; ?>
        </div>
        <div class="mdl-tabs__panel" id="menu_archives">
            <?php
            $args = array(
            	'type'            => 'monthly',
            	'limit'           => '',
            	'format'          => 'html',
            	// 'before'          => '<a class="mdl-navigation__link" href="">',
            	// 'after'           => '</a>',
            	'show_post_count' => false,
            	'echo'            => 1,
            	'order'           => 'DESC'
            );
             ?>
             <ul>
                <?php wp_get_archives($args); ?>
             </ul>
        </div>
      </div>
    </div>
    <div class="mdl-cell--4-col mdl-cell--8-col-tablet menu-container-bottom--right">
      <dev class="search">
        <form method="get" action="<?php bloginfo('url'); ?>/">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="search_menu" name="s" value="<?php echo $_GET['s']; ?>">
            <label class="mdl-textfield__label" for="search_menu">Text...</label>
            <label class="mdl-button mdl-js-button mdl-button--icon search-icon" for="search">
              <i class="material-icons">search</i>
            </label>
          </div>
        </form>
      </dev>
    </div>
  </div>
</div>
