<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header('portfolio'); ?>

<header>
	<h1>Td.</h1>
</header>

<section>
	<div class="row">
		<h2>Display Ads</h2>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
	<?php if( get_field('banner_sample') ): ?>
	<div class="row">
		<?php while( has_sub_field('banner_sample') ): ?>
		<div class="holder">
			<h3><?php the_sub_field('banner_content'); ?></h3>
			<div class="work-banner">
			
				<!-- Start Flash -->
				<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="<?php the_sub_field('banner_width'); ?>" height="<?php the_sub_field('banner_height'); ?>" id="FlashID" title="<?php the_sub_field('banner_content'); ?>">
					<param name="movie" value="<?php the_sub_field('add_a_banner'); ?>">
					<param name="quality" value="high">
					<param name="wmode" value="opaque">
					<param name="swfversion" value="9.0.115.0">
					<!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
					<param name="expressinstall" value="Scripts/expressInstall.swf">
					<!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
					<!--[if !IE]>-->
					<object type="application/x-shockwave-flash" data="<?php the_sub_field('add_a_banner'); ?>" width="<?php the_sub_field('banner_width'); ?>" height="<?php the_sub_field('banner_height'); ?>">
						<!--<![endif]-->
						<param name="quality" value="high">
						<param name="wmode" value="opaque">
						<param name="swfversion" value="9.0.115.0">
						<param name="expressinstall" value="Scripts/expressInstall.swf">
						<!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
						<div>
							<h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
							<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
						</div>
						<!--[if !IE]>-->
					</object>
					<!--<![endif]-->
				</object>
				<!-- END Flash -->
				
			</div>
			<!-- END Banner -->
			
		</div>
		<!-- END Holder -->
		<?php endwhile; ?>
		
	</div>
	<!-- END Row -->
	<?php endif; ?>
</section>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>

<!--<?php get_footer(); ?>-->