<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<section class="post">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_excerpt(); ?>
</section>

<?php
endwhile;
endif;
?>