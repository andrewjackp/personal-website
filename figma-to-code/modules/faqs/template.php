<?php
	$faqs = $props['faqs'] ?? [];
	$props['heading'] = "Frequently Asked Questions";
	$props['caption'] = "Clarity and transparency are central to how we work. Below are answers to some of the most common inquiries from our partners.";

	$questionStyle = $props['questionStyle'] ?? "default";

	$summaryStyle = $props['summaryStyle'] ?? "default";

	$faqPageStyle = $props['faqPageStyle'] ?? "default";
?>

<faqs class="faq-page-item' <?=$faqPageStyle?>">
	<?php 
		include('modules/page-header/template.php');
	?>
	<ul class='faq-list'>
	<?php foreach($faqs as $faq) { ?>
		<li>
			<article class='faq-card'>

				<details class="question-tab <?=$questionStyle?>">

				<summary class="<?=$summaryStyle?>"><?=$faq['question']?></summary>
				
				<p class="soft-voice"><?=$faq['answer']?></p>

				</details>
			</article>
		</li>	
	<?php } ?>
	</ul>
</faqs>