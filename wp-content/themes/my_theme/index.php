<?php get_header(); ?>

        <section id="container">
            <div class="wrap-container">
                <section class="content-box box-1">
                    <!--Start Box-->
                    <div class="zerogrid">
                        <div class="grid">
                        	<?php $portfolio_posts = new WP_Query([
                        		'posts_type' => 'portfolio',
                        		'posts_per_page' => -1,
                        	]); ?>

                        	<?php if ( $portfolio_posts->have_posts() ) : while ( $portfolio_posts->have_posts() ) : $portfolio_posts->the_post(); ?>
                        	  <!-- post -->
	                            <div class="wrap-col">
	                                <a class="example-image-link" target="_blank" href="<?php the_field('link'); ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
	                                    <div class="zoom-container">
	                                        <div class="zoom-caption">
	                                            <div class="caption-inner">
	                                                <div class="caption-inner1">
	                                                    <i class="fa fa-eye"></i>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <?php the_post_thumbnail( 'full'); ?>
	                                    </div>
	                                </a>
	                            </div>
                        	  <?php endwhile; ?>
                        	  <!-- post navigation -->
                        	  <?php else: ?>
                        	  <!-- no posts found -->
                        	<?php endif; ?>
                        </div>
                        <!-- grid -->
                    </div>
                </section>
               <hr class="line">
            </div>
        </section>
     <?php get_footer(); ?> 