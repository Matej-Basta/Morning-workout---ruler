<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Ruler</h1>

    <?php
    
    $size = 60;
    $cm_length = 200;
    $sections = 12;

    $number_of_cm = $size / 10;
    $mm_length = $cm_length / 10;

    ?>

    <div class='ruler'>


        <div class="section section--cm" style="width: <?= $mm_length ?>px"><div class="section__number">0</div></div>

        <?php for($i = 0; $i < $number_of_cm; $i++) : ?>

            <?php for($j = 0; $j < $sections-1; $j++) : ?>

                <?php if($sections % 2 === 0 && $j === ($sections - 2) / 2) : ?>

                    <div class="section section--middle" style="width: <?= $mm_length ?>px"></div>

                    <?php continue; ?>

                <?php endif; ?>

                <div class="section" style="width: <?= $mm_length ?>px"></div>

            <?php endfor; ?>

            <div class="section section--cm" style="width: <?= $mm_length ?>px"><div class="section__number"><?= $i + 1 ?></div></div>

        <?php endfor; ?>

        </div>

</body>
</html>