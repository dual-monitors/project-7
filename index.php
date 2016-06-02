<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

	<div class="page-title">
		<h2> <?php echo $our_title = get_the_title( get_option('page_for_posts', true) ); ?> </h2>
	</div>
    <div class="content">


    	<?php get_template_part( 'loop', 'index' );	?>

    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>