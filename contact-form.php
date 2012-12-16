<?php
/*
Template Name: Contact Form
*/
?>

<div id="form">
<?php if(isset($emailSent) && $emailSent == true) { ?>

	<div class="thanks">
		<p>Merci, <?=$name;?>.</p>
		<p>Votre message a &eacute;t&eacute; envoy&eacute; avec succ&egrave;s.</p>
	</div>

<?php } else { ?>

	<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>
	<h3>Contacte <em>moi</em></h3>
		
		<?php if(isset($hasError) || isset($captchaError)) { ?>
			<p class="error">Une erreur est survenue lors de l'envoi du formulaire</p>
		<?php } ?>
	
		<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
	
			<ol class="forms">
				<li><label for="contactName">Nom</label>
					<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField" />
					<?php if($nameError != '') { ?>
						<span class="error"><?=$nameError;?></span> 
					<?php } ?>
				</li>
				
				<li><label for="email">E-mail</label>
					<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email" />
					<?php if($emailError != '') { ?>
						<span class="error"><?=$emailError;?></span>
					<?php } ?>
				</li>
				
				<li class="textarea"><label for="commentsText">Message</label>
					<textarea name="comments" id="commentsText" rows="8" cols="30" class="requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
					<?php if($commentError != '') { ?>
						<span class="error"><?=$commentError;?></span> 
					<?php } ?>
				</li>
				
				<li class="buttons"><input type="hidden" name="submitted" id="submitted" value="true" /><input type="submit" value="Envoyer"></li>
			</ol>
		</form>
	
		<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>
</div>