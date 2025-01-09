<?php
	$faqs = $props['faqs'] ?? [];
	$props['heading'] = "Frequently Asked Questions";
	$props['caption'] = "Pellentesque cras adipiscing tempus libero vel nullam mauris tellus. Aliquam ultrices tellus consequat amet, lectus aliquam est in neque.";

	$questionStyle = $props['questionStyle'] ?? "default";

	$summaryStyle = $props['summaryStyle'] ?? "default";

	$faqPageStyle = $props['faqPageStyle'] ?? "default";
?>

<faqs class="faq-page-item' <?=$faqPageStyle?>">
	<?php 
		include('modules/page-header/template.php');
	?>
	<ul id='faq-list'>
	<?php foreach($faqs as $faq) { ?>
		<li>
			<article class='faq-card'>

				<details class="question-tab <?=$questionStyle?>">

				<summary class="<?=$summaryStyle?>"><?=$faq['question']?></summary>
				
				<p class="quiet-voice"><?=$faq['answer']?></p>

				</details>
			</article>
		</li>	
	<?php } ?>
	</ul>
</faqs>