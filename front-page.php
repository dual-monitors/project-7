<?php get_header();  ?>

<div class="hero" style="background-image: url( 
		<?php $image = get_field('hero_image'); ?>
		<?php echo $image['url']?>
		)">

	<div class="hero-content">
		<h1> <?php echo get_field('hero_title'); ?> </h1>
		<div class="hero-keywords">
			<p> <?php echo get_field('keyword_1'); ?> </p>
			<p> <?php echo get_field('keyword_2'); ?> </p>
			<p> <?php echo get_field('keyword_3'); ?> </p>
		</div>
	</div>

</div>

<div class="main">
	<div class="container">

		<div class="content">
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

			<?php endwhile; // end the loop?>
		</div> <!-- /,content -->

 

	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>