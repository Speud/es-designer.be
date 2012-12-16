<?php
	get_header('single');
?>

<section id="works">	
					<header>
						<nav id="subNav">
							<ul>
								<li class="techniques-archive"> 
									<a href="<?php bloginfo('wpurl'); ?>/travaux" title="Voir tous les travaux">tous</a>
								</li>
								<?php 
								$args = array( 'taxonomy' => 'techniques' );
								$terms = get_terms('techniques', $args);

								$count = count($terms); $i=0;
								if ($count > 0) {
									$term_list = '<li class="techniques-archive">';
									foreach ($terms as $term) {
										$i++;
										$term_list .= '<a href="' . get_term_link( $term->slug, $term->taxonomy ) . '" title="' . sprintf(__('Voir tous les travaux de %s', 'es'), $term->name) . '">' . $term->name . '</a>';
										if ($count != $i) $term_list .= ''; else $term_list .= '</li>';
									}
									echo $term_list;
								}
								?>
							</ul>
						</nav>
					</header>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

<!-- ARTICLES -->		
		<article <?php post_class(); ?>>
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<div>	
				<footer>
					<?php _e('Posté le'); ?> <?php echo get_the_date(); ?>
				</footer>
				<section class="works-content">
					<?php the_content(); ?>	
					<?php the_post_thumbnail('large'); ?>	
				</section>
			</div>
		</article>
<?php endwhile; ?>
<?php endif; ?>
</section>

<?php
	get_footer();
?>