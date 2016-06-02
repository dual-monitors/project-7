<footer class="page-footer">
  <div class="container">
    <p>&copy; Copyright <?php echo date('Y'); ?>. Designed and developed by <?php echo get_field('site_owner'); ?>.</p>
    <ul class="footer-social">
    	<li><a href=" <?php echo get_field('page_facebook'); ?> "><i class="fa fa-facebook" aria-hidden="true"></i>
</a></li>
    	<li><a href=" <?php echo get_field('page_twitter'); ?> "><i class="fa fa-twitter" aria-hidden="true"></i>
</a></li>
    	<li><a href=" <?php echo get_field('page_linkedin'); ?> "><i class="fa fa-linkedin" aria-hidden="true"></i>
</a></li>
    	<li><a href=" <?php echo get_field('page_instagram'); ?> "><i class="fa fa-instagram" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>