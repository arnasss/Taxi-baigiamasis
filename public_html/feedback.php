<?php

require '../bootloader.php';

use \App\App;

$createForm = new \App\Participants\Views\CreateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Feedback</title>
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/milligram.min.css">
        <link rel="stylesheet" href="media/css/main.css">
        <link rel="stylesheet" href="media/css/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header>
            <?php print $navigation->render(); ?>
        </header>

        <main>
            <section class="wrapper">

                <div class="block">
                    <h2>Atsiliepimai:</h2> 
                    <div class="comment-container"></div> 
                </div>

                <div class="block">
                    <?php if (App::$session->userLoggedIn()): ?>
                        <?php print $createForm->render(); ?>
                    <?php else: ?>
                        <div> Norėdami parašyti komentarą privalote užsiregistruoti</div>
                    <?php endif; ?>                 
                </div>
            </section>
            
        </main>

        <!-- Footer -->        
        <footer>
            <?php print $footer->render(); ?>
        </footer>

        <script defer src="media/js/app.js"></script>

    </body>
</html>