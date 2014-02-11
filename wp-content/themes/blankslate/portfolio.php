<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header('portfolio'); ?>

	<header class="row">
		<div class="col-md-12">
		<h1>EDMs</h1>
		</div>
	</header>
	
	<section class="row">
	
		<div class="col-md-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
			
			<?php if( get_field('banner_sample') ): ?>
			
			<div class="row">
			<?php while( has_sub_field('banner_sample') ): ?>
				
				<div class="col-md-4">
					<img src="<?php the_sub_field('add_a_banner'); ?>" alt="<?php the_sub_field('alt'); ?>" width="100%" />
					<p><?php the_sub_field('banner_content'); ?></p>
				</div>
				
			<?php endwhile; ?>
			</div>
			
			<?php endif; ?>
			
			<?php if( get_field('EDM_sample') ): ?>
			
			<div class="row">
			<?php while( has_sub_field('EDM_sample') ): ?>
				
				<div class="col-md-6 work-sample">
					<img src="<?php the_sub_field('add_an_edm'); ?>" alt="<?php the_sub_field('edm_content'); ?>" />
					<p><?php the_sub_field('edm_content'); ?></p>
				</div>
				
			<?php endwhile; ?>
			</div>
			
			<?php endif; ?>
			
		</div>
	
	</section>
<?php get_footer(); ?>