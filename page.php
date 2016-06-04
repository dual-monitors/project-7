<?php get_header();  ?>

<div class="main">

  <div class="page-title">
	 <h2><?php the_title(); ?></h2>
  </div>

  <div class="container">
  	<section class="about-section">
		<div class="about-container">
			<h2> <?php echo get_field('about_title') ?> </h2>

			<?php $image = get_field('skills_accent'); ?>
        	<img class="accent" src="<?php echo $image['sizes']['medium']?>">

        	<p> <?php echo get_field('about_paragraph'); ?> </p>

        	<div class="about-images">
				<div class="about-image">
					
				</div>
				<div class="about-image">
					
				</div>
				<div class="about-image">
					
				</div>
				<div class="about-image">
					
				</div>
        	</div>

		</div>
  	</section>

	

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>