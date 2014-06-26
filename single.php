<?php get_header(); ?>
<section id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<nav class="next_post_nav">
	<table>
	<tbody>
	<tr>
	<td><a href="#"></a></td>
	<td>
	<a href="#" class="next_post_link">Understanding how to properly rest posts</a>
	<a href="#"><i class="fa fa-angle-right"></i></a>
	</td>
	</tr>
	</tbody>
	</table>
	</nav>
	<aside class="intro_content">
		<h1><?php the_title(); ?></h1>
		<p class="time_to_read"><b>Time to Read:</b> 18 Minutes</p>
		<p><i>The real power of WordPress—the power that allows us to leverage it for more than just blogging—is it’s pre-established functions for easily accessing content from the database and displaying it in custom template files or plugins. These query functions allow us to display and organize content on our terms. They allow us to build complex websites and applications that display content in more interesting and useful ways.</i></p>
	</aside>
	<hr>
	<aside class="title_content">
	<a href="#">..</a>
	</aside>
	<section class="main_content">
		<?php the_content(); ?>
	</section>
	<aside class="support_content">
		<img src="http://beyondtheblog.wpengine.com/wp-content/uploads/2014/06/Screen-Shot-2014-06-24-at-10.12.04-PM.png">
		<p><a href="#">Chase Replogle</a></p>
		<p>Posted <?php the_time('F jS, Y') ?></p>
		<p><a href="#">Queries</a></p>
	</aside>
	<?php endwhile; endif; ?>
	<footer class="footer">
	</footer>
</section>
<?php get_footer(); ?>