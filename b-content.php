<article class="c-box <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">
	<div class="box-header">
		<!-- post-thumbnail -->
		

		
		
			<?php 

			$icon = get_field('include_icon');

			if ( get_field('include_icon') ): ?>

				<img class="header-icon" src="<?php echo $icon['url']; ?>"/> 

			<?php endif; ?>

			
			
			<span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>

			

		
	</div><!-- box header -->

	<div class="box-content">
		<p class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in

			<?php

			$categories = get_the_category();
			$separator = ", ";
			$output = '';

			if ($categories) {

				foreach ($categories as $category) {

					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;

				}

				echo trim($output, $separator);

			}

			?>

			</p>

			<div class="post-body">
				<?php if ( is_search() && is_archive() ) { ?>
					<p>
					<?php echo get_the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
					</p>
				<?php } else {
					if ($post->post_excerpt) { ?>

						<p>
						<?php echo get_the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
						</p>

					<?php } else {

						the_content();

					}
				} ?>
			</div>
			<!--//post body-->
	</div><!-- box content -->

</article><!-- c box -->


	