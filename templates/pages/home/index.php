
<section>
	<inner-column>
		<?php 
			$heading = "Andy Polito";
			$intro = "Front End Web Developer";
			$message = "Builder of sites and player of drums.";
			include('templates/modules/call-to-action/template.php');
?>
	</inner-column>
</section>

<section>
	<inner-column>
		<?php include('templates/modules/home-cards/template.php');?>
	</inner-column>
</section>

<section class="resume" id="experience">
	<inner-column>
		<?php $pageTitle = "Experience" ?>
		<?php $intro = "" ?>
		<?php include('templates/modules/page-header/template.php');?>
		<?php
			include('templates/modules/resume-list/template.php');
		?>
	</inner-column>
</section>

<section>
	<inner-column>
		<?php $pageTitle = "Projects" ?>
		<?php include('templates/modules/page-header/template.php');?>
		<?php include('templates/modules/project-spotlight/template.php');?>
	</inner-column>
</section>