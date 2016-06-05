<?php get_header(); ?>
<?php //index.php is the last resort template, if no other templates match ?>

<div class="main">

	<div class="page-title black-background">
		<div class="dot-overlay">
			<h2> <?php echo $our_title = get_the_title( get_option('page_for_posts', true) ); ?> </h2>
		</div>
	</div>

  	<div class="container">


	<div class="content-sidebar clearfix">
	    <div class="blog-content">

	    	<?php get_template_part( 'loop', 'index' );	?>

	    </div> <!--/.content -->

	    <?php get_sidebar(); ?>
	 </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>