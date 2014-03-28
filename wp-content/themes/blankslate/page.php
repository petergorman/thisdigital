<?php get_header(); ?>
	<header class="row">
		<div class="col-md-6 col-md-offset-3 td-logo">
			<img src="<?php echo site_url(); ?>/HTML_Build/img/td_logo_01.gif" alt="This Digital" title="This Digital"/>
			
			<h1>This Digital is a creative agency based in Sydney specialising in digital design and devleopment for small and medium sized businesses.</h1>
			
			<p>We offer services in:</p>
			
			<ul>
			
				<li>Company website design and development</li>
				<li>Landing page, microsite and startup solutions</li>
				<li>Digital marketing - EDM and Banner ad design and devleopment</li>
				<li>Social media campaigns</li>
			
			</ul>
			
			
			
		</div>
	</header>
	
	<section class="row">
	
		<div class="col-md-6 col-md-offset-3">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>

		</div>
	
	</section>
<?php get_footer(); ?>