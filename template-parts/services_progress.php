<?php

$arResult = [
    'progress_title' => $args['progress_title'],
    'progress_subtitle' => $args['progress_subtitle'],
    'progress_item' => $args['progress_item'],
];

?>

<section class="progress">
    <div class="container">
        <div class="progress__title section-title"><?= $arResult['progress_title'] ?></div>
        <div class="progress__subtitle"><?= $arResult['progress_subtitle'] ?></div>

        <ul class="progress__container list-reset">
            <?php foreach ($arResult['promo_adv'] as $item):
                $image = [
                    'full' => wp_get_attachment_image_url($item['progress_image'], 'full'),
                ];
                ?>

                <li class="progress__item">
                    <span class="icon" style="background-image: url(<?= $image['full'] ?>);"></span>
                    <span><?= $item['progress_item_title'] ?></span>
                </li>

            <?php endforeach; ?>

        </ul>

    </div>
</section>
