<?php
	/*
	Template Name: works
	*/
?>
<?php
	get_header('single');
?>
<section id="works">
					<header>
						<nav id="subNav">
							<ul>	
								<li class="techniques-archive"> 
									<a href="<?php bloginfo('wpurl'); ?>/travaux" id="tous" title="Voir tous les travaux">tous</a>
								</li>
								<?php 
								$args = array( 'taxonomy' => 'techniques' );
								$terms = get_terms('techniques', $args);

								$count = count($terms); $i=0;
								if ($count > 0) {
									
									foreach ($terms as $term) {
										$i++;
										$term_list .= '<li class="techniques-archive"><a href="' . get_term_link( $term->slug, $term->taxonomy ) . '" id="'. $term->name .'" title="' . sprintf(__('Voir tous les travaux de %s', 'es'), $term->name) . '">' . $term->name . '</a></li>';
										if ($count != $i) $term_list .= '';
									}
									echo $term_list;
								}
								?>
							</ul>
						</nav>
					</header>
					
					<div id="gallery">				
<?php 
$term = get_term_by("slug", get_query_var("term"), get_query_var("taxonomy"));

$args = array('post_type' => 'works', 'techniques' => $term->slug);
$loop = new WP_Query( $args );

// The Loop
while ( $loop->have_posts() ) : $loop->the_post();
?>
						<article class="gallery gallery-effects">
							<?php the_post_thumbnail('folio-work'); ?>
							<div class="mask mask-1"></div>
							<div class="mask mask-2"></div>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail('large'); ?>
								<div class="gallery-text">			 
									<h1><?php the_title(); ?></h1>						
									<p><?php the_content(); ?></p>	 
								</div>
							</a>
						</article>
<?php endwhile; ?>
					</div>	
</section> <!-- works -->					
<?php 
	get_footer();
?>