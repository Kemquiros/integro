
<html>
<?php get_header() ?>
<?php include 'menu1.php';?>
<?php include 'banner.php';?>

<div class="container clearfix">

	<div class="inner-container uncode-blog clearfix">
    <div class="col-sm-8 blog-main">
      <?php include 'menu2.php';?>
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();      
				get_template_part( 'content', get_post_format() );

			endwhile; endif;
			?>
		</div> <!-- blog-main -->

		<?php get_sidebar();  ?>
	</div>
</div>

<?php get_footer();?>
</html>
