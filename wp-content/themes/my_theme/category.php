<?php get_header(); ?>

<section id="container">
	<div class="wrap-container">
		<!--Start Box-->
		<div class="gallery">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="wrap-col ">
					<div class="item">
						<a class="example-image-link" target="_blank" href="<?php the_field('link'); ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<div class="zoom-container">
								<div class="zoom-caption">
									<div class="caption-inner">
										<div class="caption-inner1">
											<i class="fa fa-eye"></i>
										</div>
									</div>
								</div>
								<?php the_post_thumbnail('full'); ?>
							</div>
						</a>
						<div class="item-content">
							<a href="<?php the_field('reviews-link'); ?>" target="_blank" class="item-content__link"><?php the_field('customer'); ?></a>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
			  <!-- post -->
			  <?php endwhile; ?>
			  <!-- post navigation -->
			  <?php else: ?>
			  <!-- no posts found -->
			<?php endif; ?>
		</div>
		<hr class="line">
	</div>
</section>

<?php get_footer(); ?>