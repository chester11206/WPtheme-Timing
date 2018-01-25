<!-- this is a post format for 歷史脈絡 -->

	<div class="row">
		
		<?php if( has_post_thumbnail() ): ?>
		
			<div class="col-xs-12">
				<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
			</div>
		
		<?php else: ?>
		
			<div class="col-xs-12">
				<?php the_content(); ?>
			</div>
		
		<?php endif; ?>
	</div>

