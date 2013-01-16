<?php
	get_header();
?>

<section id="news">	
	<h1 class="displayHidden">News</h1>	
<?php $num = 0;
if(have_posts()): 
	while(have_posts()): the_post(); $num++ ?>

<!-- ARTICLES -->		
		<article <?php post_class(); ?>>
			<header>
				<!--<h1><a href="#titre<?php echo $num; ?>"><?php the_title(); ?></a></h1>-->
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</header>	
				<footer id="titre<?php echo $num; ?>">
					<?php _e('Posté le'); ?> <?php echo get_the_date(); ?>
					<span class="count_comments"><a href="<?php the_permalink(); ?>">
						<?php comments_number( 'Aucun commentaire', '1 commentaire', '% commentaires' ); ?> 
					</a></span>
				</footer>
					<?php	if ( has_post_thumbnail() ) { ?>
							<figure class="news_content">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
							</figue>
						<?php	} 
						the_content(); ?>	
		</article>
<?php endwhile; ?>
<?php endif; ?>
</section>
<?php
	get_footer();
?>