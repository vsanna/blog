<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
       if ( is_active_sidebar( 'footer1' ) ) :
       dynamic_sidebar( 'footer1' );

       else: ?>
            <div class="widget">
                    <h3>No Widget</h3>
                    <p>ウィジットは設定されていません。</p>
            </div>
       <?php
       endif;
       ?>
            </div>
             <div class="col-md-4">
                <?php
       if ( is_active_sidebar( 'footer2' ) ) :
       dynamic_sidebar( 'footer2' );

       else: ?>
            <div class="widget">
                    <h3>No Widget</h3>
                    <p>ウィジットは設定されていません。</p>
            </div>
       <?php
       endif;
       ?>
            </div>
             <div class="col-md-4">
                <?php
       if ( is_active_sidebar( 'footer3' ) ) :
       dynamic_sidebar( 'footer3' );

       else: ?>
            <div class="widget">
                    <h3>No Widget</h3>
                    <p>ウィジットは設定されていません。</p>
            </div>
       <?php
       endif;
       ?>
            </div>
        </div>
    </div>





<div class="container site-info">
    &copy; 2014 - <?php echo date_i18n( 'Y' ); ?> vsanna
    <!-- .site-info -->
</div>



</div><!--footer終わり-->

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">jQuery(function() { 
    jQuery("a").click(function(e) {       
        var ahref = jQuery(this).attr('href');
        if (ahref.indexOf("vsanna.sakura.ne.jp") != -1 || ahref.indexOf("http") == -1 ) {
            ga('send', 'event', '内部リンク', 'クリック', ahref);} 
        else {
            ga('send', 'event', '外部リンク', 'クリック', ahref);}
        });
    });
</script>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.2/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
    </body>
</html>
