<form method="get" id="searchform" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="s" class="assistive-text hidden"><?php _e( 'Search', 'the-bootstrap' ); ?></label>
	<div class="input-append">
		<input id="s" class="span2 search-query" type="search" name="s" placeholder=" <?php esc_attr_e( 'Search', 'the-bootstrap' ); ?>"><!--
	 --><button class="btn btn-default" name="submit" id="searchsubmit" type="submit"><?php _e( 'go', 'the-bootstrap' ); ?></button>
   	</div>
</form>
<?php
