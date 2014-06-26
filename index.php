<?php get_header(); ?>
<div class="container_wrapper">
<div class="about-header clear">
	<h1>About Beyond the Blog</h1>
	<hr>
	<div class="about-info">
		<p><span class="firstcharacter">T</span>here is no denying that WordPress has become the largest web publishing platform in the world; powering over 22% of the web. But don't let it's perception fool you. WordPress isn't just for blogs. From powerful content management to mobile and web applications, WordPress is developing into a platform for a lot more than blogging. My goal is to help you build more with WordPress.</p>
	</div>
	<div class="about-support">
		<p>Think of this site as a handy guide to building content rich websites and interactive applications with WordPress.</p>
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
		<p><b>Time to Read:</b> <?php the_field('time_to_read'); ?></p>
		<p><?php the_field('excerpt'); ?></p>
		<p class="post-meta"><b>Posted:</b> <?php the_time('F jS, Y') ?> | <b>Categories:</b> <?php the_category(', '); ?></p>
		<hr>
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