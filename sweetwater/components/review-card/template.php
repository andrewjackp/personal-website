<?php
function renderReviewCard($item) {
    return "
    <li class='card-item'>
        <article class='review-card'>
            <span class='title'>{$item['title']}</span>
            <h2 class='starRating'>{$item['starRating']}</h2>

            <p class='description'>{$item['description']}</p>
            <a class='toggle-btn' href='#' data-expanded='false'>Read More</a>

            <p class='user'>by {$item['user']}</p>

            <picture>
                <img src='{$item['imageUrl']}' alt='Review image'>
            </picture>
        </article>
    </li>";
}
