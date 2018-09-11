<?php if(!is_single()) { ?>
	<a href="<?php the_permalink(); ?>" class="post-title"><h1 class="heading" style="margin-top:0"><?php the_title(); ?></h1></a>
	<span class="post-date">
		<?php the_date(); ?>
	</span>
<?php } ?>
<div class="post-content">
	<?php

	$more_string = __( 'Continue reading', 'tanx' );

	if ( ! is_single() && has_excerpt( $post->ID ) ) {
		?>

		<p><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
		<p class="pc-excerpt">
			<a href="<?php the_permalink(); ?>" class="more-link"><?php echo wp_kses_post( $more_string ); ?></a>
		</p>
		<?php
	} else {
		the_content( $more_string );
	}

	if ( shortcode_exists( '[ssba_hide]' ) ) {
		echo do_shortcode( '[ssba_hide]' );
	}
	?>
</div>
