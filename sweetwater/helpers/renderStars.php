<?php
if (!function_exists('renderStars')) {
    function renderStars($rating, $maxStars = 5) {
        $filledStar = '
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                 fill="gold" width="20" height="20" aria-hidden="true">
              <path d="M12 2l2.9 6.9 7.1.6-5.3 4.8
                       1.6 7-6.3-3.8-6.3 3.8
                       1.6-7-5.3-4.8 7.1-.6z"/>
            </svg>';

        $emptyStar = '
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                 fill="none" stroke="gold" stroke-width="2"
                 width="20" height="20" aria-hidden="true">
              <path d="M12 2l2.9 6.9 7.1.6-5.3 4.8
                       1.6 7-6.3-3.8-6.3 3.8
                       1.6-7-5.3-4.8 7.1-.6z"/>
            </svg>';

        // unique gradient id per render
        $gradId = uniqid('half-grad-');
        $halfStar = "
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'
                 width='20' height='20' aria-hidden='true'>
              <defs>
                <linearGradient id='{$gradId}'>
                  <stop offset='50%' stop-color='gold'/>
                  <stop offset='50%' stop-color='transparent'/>
                </linearGradient>
              </defs>
              <path d='M12 2l2.9 6.9 7.1.6-5.3 4.8
                       1.6 7-6.3-3.8-6.3 3.8
                       1.6-7-5.3-4.8 7.1-.6z'
                    fill='url(#{$gradId})' stroke='gold' stroke-width='2'/>
            </svg>";

        $rating = (float) $rating;
        $full = floor($rating);
        $hasHalf = ($rating - $full) >= 0.5;

        $stars = '';
        for ($i = 1; $i <= $maxStars; $i++) {
            if ($i <= $full) {
                $stars .= $filledStar;
            } elseif ($i == $full + 1 && $hasHalf) {
                $stars .= $halfStar;
            } else {
                $stars .= $emptyStar;
            }
        }
        return $stars;
    }
}
