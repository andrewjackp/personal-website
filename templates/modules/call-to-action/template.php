<?php 
	$heading = $heading ?? "Call to action heading";
	$intro = $intro ?? "Introduction";
	$message = $message ?? "message";
?>

<call-to-action>
	<div class="info">
		<h1 class='attention-voice'>
			<?=$heading?>
		</h1>
		
		<p class='loud-voice'>
			<?=$intro?>
		</p>
		
		<p class='soft-voice'>
			<?=$message?>
		</p>		
	</div>
	
	<!-- <div class="button-container">
		<a href="?page=contact" target="contact" class="site-button">Contact</a>
	</div> -->
</call-to-action>