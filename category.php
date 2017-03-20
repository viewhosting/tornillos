<?php get_header(); ?>
<div class="container">
	<h2><?php single_cat_title(); ?></h2>
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<div class="col-lg-4">
			<div class="imagen_thumb" onclick="location.href='<?php the_permalink(); ?>';">
				<div class="imagen_desc"></div>
				<?php the_content()?>

				<div class="fondotitulo"></div>
				<div class="titulo">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
			</div>
		</div>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
	
				
</div>
				</div>
<!--
	
	
	
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
-->


<?php get_footer(); ?>