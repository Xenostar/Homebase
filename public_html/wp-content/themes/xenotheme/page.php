<?php get_header(); ?>
	<header class="xeno-h small">
		<div class="row">
			<div class="col_06">

				<h1><?php the_title(); ?></h1>

			</div>
		</div>
	</header>
	<section class="main">
		<div class="row">
			<div class="col_04">

				<div class="content">
<?php the_post(); ?>
<?php the_content(); ?>
				</div>

			</div>
			<div class="col_02">

<?php get_sidebar(); ?>

			</div>
		</div>
	</section>
<?php get_footer(); ?>
