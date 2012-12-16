<?php
	get_header('single');
?>

<section id="news">		
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
					<span class="count_comments">
						<?php comments_number( 'Aucun commentaire', '1 commentaire', '% commentaires' ); ?> 
					</span>
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
</section>

<div id="comments">
	<section>
		
		
	<?php 
		$postid = get_the_ID();
		$defaults = array(
			'post_id' => $postid,
			'number' => '20',
			'order' => 'DESC',
			'status' => 'approve',
			'count' => false
		); 

		$comments = get_comments($defaults);
		
			if(count($comments)) : ?>
			<h3 class="comment-title">Commentaires</h3>
		<?php	foreach($comments as $comment) : ?>
			<article>
				<header class="comment_author">
					<a href="<?php the_permalink(); ?>"><?php echo $comment->comment_author; ?></a>
					<span class="comment_date">posté le <?php echo $comment->comment_date; ?></span>
				</header>
				<section> 
					<article class="comment_content">
						<?php echo get_the_post_thumbnail(); ?>
						<?php echo $comment->comment_content; ?>
					</article>
				</section>
			</article>
			<?php endforeach; ?>
	<?php endif; ?>
	</section>
</div>

<?php comment_form(); ?>

<?php
	get_footer();
?>