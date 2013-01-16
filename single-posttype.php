<?php
	get_header();
?>
LOL
<section id="news">
	<h1 class="displayHidden">News</h1>		
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

<!-- ARTICLES -->		
		<article <?php post_class(); ?>>
			<header>
				<h1><?php the_title(); ?></h1>
			</header>	
				<footer>
					<?php _e('Posté par'); ?> <?php the_author(); ?> <?php _e('le'); ?> <?php echo get_the_date(); ?>
					<span class="count_comments">
						<?php comments_number( 'Aucun commentaire', '1 commentaire', '% commentaires' ); ?> 
					</span>
				</footer>
				<section class="news_content">
					<?php the_post_thumbnail('folio-work'); ?>
					<?php the_content(); ?>	
				</section>
		</article>
<?php endwhile; ?>
<?php endif; ?>
</section>

<div id="comments">
	<section>
		<h3 class="comment-title">Commentaires</h3>
	<?php $defaults = array(
			'number' => '20',
			'order' => 'DESC',
			'status' => 'approve',
			'count' => false
		); 

		$comments = get_comments($args);
		
			foreach($comments as $comment) : ?>
			<article>
				<header class="comment_author">
					<a href="<?php the_permalink(); ?>"><?php echo $comment->comment_author; ?></a>
					<span class="comment_date">posté le <?php echo $comment->comment_date; ?></span>
				</header>
				<section> 
					<article class="comment_content">
						<?php echo $comment->comment_content; ?>
					</article>
				</section>
			</article>
			<?php endforeach; ?>
	</section>
</div>

<?php comment_form(); ?>

<?php
	get_footer();
?>