<section>
	<inner-column>
		<?php 
			include('templates/modules/page-header/template.php');
		?>
	</inner-column>
	</section>

<?php foreach ($pageData["sections"] as $section) {
	$module = $section["module"];
?>

	<section>
		<inner-column>
			<?php include("templates/modules/$module/template.php"); ?>
		</inner-column>
	</section>

<?php } ?>	

<section class='welcome'>
	<inner-column>
		<?php getTemplate($page); ?>	
	</inner-column>
</section>