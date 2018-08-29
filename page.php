<?php // CÓDIGO DA PÁGINA ESTÁTICA ?>
<?php get_header(); ?>

	<div class="container">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

		<?php endwhile; else: ?>

			<h2>Nada encontrado</h2>

		<?php endif; ?>

	</div>

	<?php get_footer(); ?>