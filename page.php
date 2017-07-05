<html>
<?php get_header(); ?>
<div id="page">
<?php include 'menu2.php';?>
	<div class="row" id="page-content">
		<div class="col-sm-12">

			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile; endif;
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->
</div>
<?php get_footer(); ?>
</html>
