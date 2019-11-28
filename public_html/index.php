<?php
require '../bootloader.php';

$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="media/css/main.css">
        <link rel="stylesheet" href="media/css/responsive.css">
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/milligram.min.css">
        <link rel="stylesheet" href="media/css/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body>

        <!-- Navigation -->
        <header>
            <?php print $navigation->render(); ?>
        </header>

        <!--Header image -->
        <section class="bg_image"></section>

        <!-- Main Content --> 
        <section class="container">
            <div class="card">
                <div class="img_taxi img_sizes"></div>
                <h4 class="card_head">Taxi paslaugos</h4>
                <p class="card_text">Greitas atvykimas visoja Lietuvoja</p>
            </div>
            <div class="card">
                <div class="img_creditcard img_sizes"></div>
                <h4 class="card_head">Patogus atsiskaitimas</h4>
                <p class="card_text">Visas musu teikiamas paslaugas galite apmoketi banko kortele</p>
            </div>
            <div class="card">
                <div class="img_rent img_sizes"></div>
                <h4 class="card_head">Automobiliu nuoma</h4>
                <p class="card_text">Taipogi teikiame automobiliu nuomos paslaugas</p>
            </div>
        </section>

        <!-- Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1152.1059922237764!2d25.339003020095994!3d54.72348598245812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x37f51f09d8b21025!2sSaul%C4%97tekio%20sl%C4%97nio%20mokslo%20ir%20technologij%C5%B3%20parkas!5e0!3m2!1slt!2slt!4v1574912321291!5m2!1slt!2slt"></iframe>

        <!-- Footer -->        
        <footer>
            <?php print $footer->render(); ?>
        </footer>


    </body>
</html>
