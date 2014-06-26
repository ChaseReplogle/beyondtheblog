<?php get_header(); ?>
<div class="container_wrapper">
<div class="about-header clear">
	<h1>About Beyond the Blog</h1>
	<hr>
	<div class="about-info">
		<p><span class="firstcharacter">T</span>he real power of WordPress—the power that allows us to leverage it for more than just blogging—is it’s pre-established functions for easily accessing content from the database and displaying it in custom template files or plugins. These query functions allow us to display and organize content on our terms. They allow us to build complex websites and applications that display content in more interesting and useful ways.</p>
	</div>
	<div class="about-support">
		<p>Some sort of support information about the site.</p>
	</div>
</div>
<hr>
<aside class="categories">
	<div class="category_icon empty">
		<a href="#">
			<p><i class="fa fa-database"></i></p>
			<p>Data Modeling</p>
		</a>
	</div>
	<div class="category_icon">
		<a href="#">
			<p><i class="fa fa-sort-amount-asc"></i></p>
			<p>Queries</p>
		</a>
	</div>
	<div class="category_icon empty">
		<a href="#">
			<p><i class="fa fa-cloud-upload"></i></p>
			<p>Front End Posting</p>
		</a>
	</div>
	<div class="category_icon empty">
		<a href="#">
			<p><i class="fa fa-magic"></i></p>
			<p>User Interface</p>
		</a>
	</div>
	<div class="category_icon empty">
		<a href="#">
			<p><i class="fa fa-star"></i></p>
			<p>Resources</p>
		</a>
	</div>
</aside>
<section id="main_content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<p><b>Time to Read:</b> 18 Minutes</p>
		<p>The real power of WordPress—the power that allows us to leverage it for more than just blogging—is it’s pre-established functions for easily accessing content from the database and displaying it in custom template files or plugins. These query functions allow us to display and organize content on our terms. They allow us to build complex websites and applications that display content in more interesting and useful ways.</p>
		<p class="post-meta"><b>Posted:</b> <?php the_time('F jS, Y') ?> | <b>Categories:</b> <a href="#">Queries</a></p>
		<hr>
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<p><b>Time to Read:</b> 18 Minutes</p>
		<p>The real power of WordPress—the power that allows us to leverage it for more than just blogging—is it’s pre-established functions for easily accessing content from the database and displaying it in custom template files or plugins. These query functions allow us to display and organize content on our terms. They allow us to build complex websites and applications that display content in more interesting and useful ways.</p>
		<p class="post-meta"><b>Posted:</b> <?php the_time('F jS, Y') ?> | <b>Categories:</b> <a href="#">Queries</a></p>
		<hr>
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<p><b>Time to Read:</b> 18 Minutes</p>
		<p>The real power of WordPress—the power that allows us to leverage it for more than just blogging—is it’s pre-established functions for easily accessing content from the database and displaying it in custom template files or plugins. These query functions allow us to display and organize content on our terms. They allow us to build complex websites and applications that display content in more interesting and useful ways.</p>
		<p class="post-meta"><b>Posted:</b> <?php the_time('F jS, Y') ?> | <b>Categories:</b> <a href="#">Queries</a></p>
	<?php endwhile; endif; ?>

	<nav class="next_post_nav">
	<table>
	<tbody>
	<tr>
	<td><a href="#"></a></td>
	<td>
	<a href="#" class="next_post_link">More Posts</a>
	<a href="#"><i class="fa fa-angle-right"></i></a>
	</td>
	</tr>
	</tbody>
	</table>
	</nav>

</section>
</div>
<?php get_footer(); ?>