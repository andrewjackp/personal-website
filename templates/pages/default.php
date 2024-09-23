<section>
	<inner-column>
		<?php 
			include('templates/modules/page-header/template.php');
		?>
	</inner-column>
	</section>


<?php if ( isset($pageData["sections"] ) ) { ?>
	<?php foreach ($pageData["sections"] as $section) {
		$module = $section["module"];
		$link = "?page=module&slug=$section[module]";
	?>

		<section>
			<inner-column>
				<a href='<?=$link?>' target='<?=$module?>'>Details</a>
				<?php include("templates/modules/$module/template.php"); ?>
			</inner-column>
		</section>

	<?php } ?>	
<?php } ?>
