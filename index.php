<?php include 'faq.php'; ?>
<!-- include funziona solo dal punto in cui esiste, la riga precedente non sa quali sono le faqs. il percorso parte dallo script dove c'è l'include-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Google FAQ</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <section id="faqs">
                <?php
                    foreach ($faqs as $faq) { ?>
                        <div class="faq">
                            <h1 class="titolo-domanda"><?php echo $faq['domanda']; ?>
                            </h1>
                            <div class="contenitore-risposta" style="display:none">
                                <?php
                                $array_risp = $faq['risposta'];//oppure scrivo direttamente $faq['risposta'] senza salvarlo dentro una variabile
                                foreach ($array_risp as $paragrafo) { ?>
                                    <p class="testo-risposta"><?php echo $paragrafo; ?></p>
                                    <?php
                                } ?>
                            </div>
                        </div> <?php
                    }
                    ?>
            </section>
        </div>

        <!-- javascript e jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="main.js" charset="utf-8"></script></body>
    </body>
</html>
