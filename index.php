<?php
	get_header();
?>

<section id="news">		
	<div id="accordion">
<?php $num = 0;
if(have_posts()): ?>
<?php while(have_posts()): the_post(); $num++ ?>

<!-- ARTICLES -->		
		<article <?php post_class(); ?>>
			<header>
				<!--<h1><a href="#titre<?php echo $num; ?>"><?php the_title(); ?></a></h1>-->
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</header>
			<div id="titre<?php echo $num; ?>">	
				<footer>
					<?php _e('Posté le'); ?> <?php echo get_the_date(); ?>
					<span class="count_comments"><a href="<?php the_permalink(); ?>">
						<?php comments_number( 'Aucun commentaire', '1 commentaire', '% commentaires' ); ?> 
					</a></span>
				</footer>
				<section class="news_content">
					<?php	if ( has_post_thumbnail() ) { ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						<?php	} 
						the_content(); ?>	
				</section>
			</div>
		</article>
<?php endwhile; ?>
<?php endif; ?>
	</div>
</section>
<?php
	get_footer();
?>