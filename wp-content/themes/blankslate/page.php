<?php get_header(); ?>
	<header class="row">
		<div class="col-md-6 col-md-offset-3 td-logo">
			<img src="<?php echo site_url(); ?>/HTML_Build/img/td_logo_01.gif" alt="This Digital" title="This Digital"/>
			
			<h1>Specialists in Banner and EDM design and development</h1>
		</div>
	</header>
	
	<section class="row">
	
		<div class="col-md-6 col-md-offset-3">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
			<!--<form>
				<label for="name">Name</label><br>
				<input type="text" id="name" name="Name" placeholder="What's your name?" /><br>
				<label for="email">Email</label><br>
				<input type="text" id="email" name="Email" placeholder="How should I reply?" /><br>
				<label for="message">Message</label><br>
				<textarea name="message" rows="2" id="message" placeholder="Fill me in..." type="text" size="2"></textarea><br>
				<input type="submit" id="submit" name="submit" value="Go" class="btn btn-info btn-lrg td_btn" />
			</form>-->
		</div>
	
	</section>
<?php get_footer(); ?>