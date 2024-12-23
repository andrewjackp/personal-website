<section>
	<inner-column>
		<?php 
			$data = getPageData('style-guide');

			echo $data['title'];

			$name = $data["slug"];
			include("templates/modules/$name/template.php");
		?>
	</inner-column>
</section>