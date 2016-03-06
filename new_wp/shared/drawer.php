<div class="mdl-layout__drawer hide-not-mobile">
  <span class="mdl-layout-title">< ProjectName/></span>
  <div class="content-center-mobile">
    <dev class="search">
      <form action="#">
        <div class="mdl-textfield mdl-js-textfield thin">
          <input class="mdl-textfield__input" type="text" id="search_drawer">
          <label class="mdl-textfield__label" for="search_drawer">Text...</label>
          <label class="mdl-button mdl-js-button mdl-button--icon search-icon" for="search_drawer">
            <i class="material-icons">search</i>
          </label>
        </div>
      </form>
    </dev>
  </div>
  <nav class="mdl-navigation">
    <a class="mdl-navigation__link" href="">Top</a>
    <a class="mdl-navigation__link" href="">About</a>
    <a class="mdl-navigation__link" href="">Contact</a>
    <a class="mdl-navigation__link" href="">Github</a>
  </nav>
  <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="#drawer_category" class="mdl-tabs__tab is-active">Category</a>
        <a href="#drawer_archives" class="mdl-tabs__tab">Archives</a>
    </div>
    <div class="mdl-tabs__panel mdl-navigation is-active" id="drawer_category">
      <?php $categories = get_categories(); ?>
      <?php foreach($categories as $cat) : ?>
        <a class="mdl-navigation__link" href="/category/<?php echo $cat->name; ?>"><?php echo $cat->name; ?> (<?php echo $cat->count; ?>)</a>
      <?php endforeach; ?>
    </div>
    <div class="mdl-tabs__panel mdl-navigation" id="drawer_archives">
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
