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

	<section class="skills-section">

		<div class="skills-container">
			<h2><?php echo get_field('skills_title'); ?></h2>

			<?php $image = get_field('skills_accent'); ?>
        	<img class="accent" src="<?php echo $image['sizes']['medium']?>">

			<p> <?php echo get_field('skills_paragraph'); ?> </p>

			<div class="skills-images">
				<figure class="skills-image">
					<?php $image = get_field('skills_image1'); ?>
        			<img src="<?php echo $image['sizes']['medium']?>">
        			<p> <?php echo get_field('skills_image1_title'); ?> </p>
				</figure>
				<figure class="skills-image">
					<?php $image = get_field('skills_image2'); ?>
        			<img src="<?php echo $image['sizes']['medium']?>">
        			<p> <?php echo get_field('skills_image2_title'); ?> </p>
				</figure>
				<figure class="skills-image">
					<?php $image = get_field('skills_image3'); ?>
        			<img src="<?php echo $image['sizes']['medium']?>">
        			<p> <?php echo get_field('skills_image3_title'); ?> </p>
				</figure>
				<figure class="skills-image">
					<?php $image = get_field('skills_image4'); ?>
        			<img src="<?php echo $image['sizes']['medium']?>">
        			<p> <?php echo get_field('skills_image4_title'); ?> </p>
				</figure>
			</div>
			
		</div>

	</section>

	<section class="portfolio-section">
		<div class="overlay">
			<div class="portfolio-container">

				<div class="portfolio-text">
					<h2><?php echo get_field('portfolio_title'); ?></h2>
					<p><?php echo get_field('portfolio_description'); ?></p>
				</div>

				<div class="portfolio-images">
					<figure class="portfolio-image">
						<?php $image = get_field('portfolio_piece1'); ?>
	    				<img src="<?php echo $image['sizes']['medium']?>">
					</figure>
					<figure class="portfolio-image">
	    				<?php $image = get_field('portfolio_piece2'); ?>
	    				<img src="<?php echo $image['sizes']['medium']?>">
	    			</figure>
	    			<figure class="portfolio-image">
	    				<?php $image = get_field('portfolio_piece3'); ?>
	    				<img src="<?php echo $image['sizes']['medium']?>">
	    			</figure>
	    			<figure class="portfolio-image">
	    				<?php $image = get_field('portfolio_piece4'); ?>
	    				<img src="<?php echo $image['sizes']['medium']?>">
	    			</figure>
				</div>

			</div>
		</div>
	</section>

	<div class="container">

		<div class="content">
			
		</div> <!-- /,content -->

 

	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>