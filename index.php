<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Google FAQ</title>
</head>
<body>
    <!--
        Riscrivere questa pagina del sito google
        https://policies.google.com/faq.
        Ci sono diverse domande con relative risposte.
        Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
        Mi raccomando di gestire per prima cosa la visualizzazione dei dati, anche in maniera grezza,
        e solo alla fine rendere più accattivante la pagina. 
    -->
    <?php
        include 'database.php';
    ?>

    <div class="header">
        <div class="header-top">
            <div class="left">
                <img src="google-logo.svg" alt="logo">
                <h2>Privacy e termini</h2>
            </div>
            <div class="right">
                <div><i class="fa-solid fa-bars"></i></div>
                <div class="circle"><span>D</span></div>
            </div>
        </div>
        <div class="header-bottom">
            <ul>
                <li>Introduzione</li>
                <li>Norme sulla privacy</li>
                <li>Termini di servizio</li>
                <li>Tecnologie</li>
                <li>Domande frequenti</li>
            </ul>
        </div>
        <hr>
    </div>

    <div class="faqs-container">
        <?php
            foreach ($faqs as $faq) {
                echo ($faq["domanda"]);
                echo ($faq["risposta"] . "<br>");
            }
        ?>
    </div>
    
</body>
</html>