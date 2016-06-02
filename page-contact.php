<?php get_header();  ?>

<div class="main">
	<div class="page-title">
		<h2><?php the_title(); ?></h2>
	</div>
	<div class="container">
		<section class="contact-info">
			<div class="contact-phone">
				<p> <?php echo get_field('page_phone'); ?> </p>
			</div>
			<div class="contact-address">
				<p> <?php echo get_field('page_address'); ?> </p>
			</div>
			<div class="contact-email">
				<p> <?php echo get_field('page_email'); ?> </p>
			</div>
		</section>
		<section class="form-map">
			<div class="form">
				<h3>Message Us</h3>
				<?php // Start the loop ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; // end the loop?>
			</div>
			<div class="map">
				<h3>Visit Us</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.9924761236693!2d-79.40008148450244!3d43.64832487912135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34dc87fa67bd%3A0xe05376a9e49647e1!2s483+Queen+St+W%2C+Toronto%2C+ON+M5V+2A9!5e0!3m2!1sen!2sca!4v1464901035456" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</section> <!-- /.form-map -->
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>