<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body>
<header class="fixed">
    <div style="margin-top: -20px">
        <nav style="font-size: 2rem">
        <h1 id="h1"><a href="<?php echo site_url() ?>"><strong>General</strong></h1>
            <span>
            <div class="ul">
            <ul class="hr header_ul" style="margin-top: inherit">
                <li><a href="<?php echo site_url() ?>">Главная</a></li>
                <li><a href="<?php echo site_url('/blog') ?>">Блог</a></li>
            </ul>
            </div>
        </nav>
    </div>
</header>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg');
    ?>);"></div>
        <h1 id="banner">Эликсир Молодости и<br>
            Долголетия из 189<br>
            Природных Компонентов</h1>
    <div>
        <ul id="main_ul">
            <li>100% натуральный продукт</li>
            <li>Лечение и профилактика 700 заболеваний</li>
            <li>Не имеет побочных эффектов</li>
            <li>Не являеться БАД-ом</li>
            <li>Доступная стоимость</li>
        </ul>
    </div>
</div><br>
<div class="passage_title"><h1>О Продуктах</h1></div><hr style="width: 50px; border: 2px solid;
color: forestgreen; margin-bottom: 3.5%">
<div class="wrapper">
    <div style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg');
    ?>);"></div>
    <div></div>
    <div>
        <h2>Нано бальзам PERFECTO LUX</h2><br>
        <p class="text_decor"><strong><em class="c-green">Nano balsam “PERFECTO LUX”</em></strong> — высококонцентрированный продукт,
            который представляет собой комплекс целебных природных ингредиентов.
        Полностью сохранены свойства натурального продукта. Оказывает омолаживающее, общеукрепляющее,
        тонизирующее действие. Нормализует обмен веществ и энергетический обмен. Повышает умственную и
        физическую активность. Оказывает положительное действие на состояние кожи и волос. Применяется
        как вспомогательное средство для предотвращения преждевременного старения организма, при истощении,
            слабости, после перенесенных заболеваний.</p>
    </div>
</div>
</body>
</html>