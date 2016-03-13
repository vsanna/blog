<footer class="mdl-mini-footer">
  <?php if(!is_single()): ?>
    <div class="mdl-mini-footer__left-section">
      <div class="mdl-logo"><a class="site-name site-name__white site-name__lg" href="<?php echo home_url(); ?>">< Project Name/></a></div>
    </div>
  <?php endif; ?>
  <div class="mdl-mini-footer__right-section">
    <ul class="mdl-mini-footer__link-list">
      <li><a target="_blank" href="https://twitter.com/vsanna2"><span class="sns-button white"><i class="fa fa-twitter"></i></span></a></li>
      <li><a target="_blank" href="https://github.com/vsanna"><span class="sns-button white"><i class="fa fa-github"></i></span></a></li>
    </ul>
  </div>
  <span class="copyright">
    Copyright © 2010-<?php echo date_i18n( 'Y' ); ?><a href="https://twitter.com/vsanna2">vsanna</a> All Rights Reserved.
  </span>
</footer>
