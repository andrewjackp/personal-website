<section>
	<inner-column>
		<?php 
			$data = getPageData('style-guide');

			$name = $data["slug"];
			include("templates/modules/$name/template.php");
		?>
	</inner-column>
</section>