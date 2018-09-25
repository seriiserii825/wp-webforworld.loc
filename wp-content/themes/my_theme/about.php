<?php
/**
 * Template Name: About
 */
 get_header();

  ?>
<section id="container">
	<div class="zerogrid">
		<div class="wrap-container clearfix">
			<div id="main-content">
				<div class="wrap-content">
					<article>
						<?php the_post(); ?>
						<div class="art-header">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<div class="art-content">
							<?php the_content(); ?>
						</div>
					</article>
				</div>
			</div>
			<hr class="line">
		</div>
	</div>
</section>
	
<?php get_footer(); ?>