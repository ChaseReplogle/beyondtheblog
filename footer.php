<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<div class="footer-wrapper clear">
	<div class="column projects">
		<h5>Current Projects</h5>
		<img src="<?php echo get_template_directory_uri(); ?>/images/birdspot.jpg" alt="birdspot" width="298" height="203" />
		<img src="<?php echo get_template_directory_uri(); ?>/images/book.jpg" alt="birdspot" width="298" height="203" />
	</div>

	<div class="column about-info">
		<h5>About</h5>
		<p>The real power of WordPress—the power that allows us to leverage it for more than just blogging—is it’s pre-established functions for easily accessing content from the database and displaying it in custom template files or plugins. These query functions allow us to display and organize content on our terms. They allow us to build complex websites and applications that display content in more interesting and useful ways.</p>
	</div>
</div>
</footer>
</div>
<?php wp_footer(); ?>
<script>
jQuery( "a.menu" ).click(function() {
  jQuery( "nav.main-menu" ).slideToggle( "slow", function() {
  });
});
</script>
</body>
</html>