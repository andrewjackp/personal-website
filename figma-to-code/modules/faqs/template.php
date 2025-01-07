<?php
	$faqs = $props['faqs'] ?? [];
	$props['heading'] = "Frequently Asked Questions";
	$props['caption'] = "Pellentesque cras adipiscing tempus libero vel nullam mauris tellus. Aliquam ultrices tellus consequat amet, lectus aliquam est in neque.";
	include('modules/page-header/template.php');
?>

<faqs>
	<ul id='faq-list'>
	<?php foreach($faqs as $faq) { ?>
		<li>
			<article class='faq-card'>
		<details>
			<summary><?=$faq['question']?></summary>
			<p class="quiet-voice"><?=$faq['answer']?></p>
		</details>
		</article>
		</li>	
	<?php } ?>
	</ul>
</faqs>