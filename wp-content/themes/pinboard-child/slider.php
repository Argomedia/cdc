<?php $sticky = get_option( 'sticky_posts' ); ?>
<?php if( ! empty( $sticky ) ) : ?>
	<?php $slider = new WP_Query( array( 'post__in' => $sticky, 'ignore_sticky_posts' => 1, 'posts_per_page' => 99 ) ); ?>
	<?php if( $slider->have_posts() ) : ?>
		<section id="slider">
			<ul class="slides">
				<?php while( $slider->have_posts() ) : $slider->the_post(); ?>
					<li>
						<article class="post hentry">
							<?php if( has_post_format( 'video' ) ) : ?>
								<?php pinboard_post_video(); ?>
							<?php else : ?>
								<?php if( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'slider-thumb' ); ?>
								<?php endif; ?>
								<h2 class="entry-title"><a href="javascript:void(0);" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<?php endif; ?>
							<div class="clear"></div>
						</article><!-- .post -->
					</li>
				<?php endwhile; ?>
			</ul>
			<div class="clear"></div>
		</section><!-- #slider -->
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
<?php endif; ?>