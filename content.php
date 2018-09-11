<?php if(!is_single()) { ?>
	<a href="<?php the_permalink(); ?>" class="post-title"><h1 class="heading" style="margin-top:0"><?php the_title(); ?></h1></a>
	<span class="post-date">
		<?php the_date(); ?>
	</span>
<?php } ?>
<div class="post-content">
	<?php 
	$more_string = __('Continue reading', 'tanx');
	if(has_excerpt( $post->ID )) { ?>
	<p>
		<?php 
		echo get_the_excerpt();
		?> <a href="<?php the_permalink(); ?>" class="more-link"><?php echo $more_string; ?></a>
	</p> <?php
}
else 
	the_content($more_string);
	if(shortcode_exists('[ssba_hide]')) {
		echo do_shortcode("[ssba_hide]");
	}
?>
</div>