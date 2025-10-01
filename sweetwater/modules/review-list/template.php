<?php
include('components/review-card/template.php');

?>

<ul class="review-list" id="review-card-list">
    <?php foreach ($reviews as $item): ?>
        <?php echo renderReviewCard($item); ?>
    <?php endforeach; ?>
</ul>

<script src='modules/review-list/script.js'>
</script>