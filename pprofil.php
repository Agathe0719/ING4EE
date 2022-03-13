<html>
    <head>
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['nomConnexion'] !== ""){
                    $nomConnexion = $_SESSION['nomConnexion'];
                    // afficher un message
                    echo "Bonjour $nomConnexion, vous êtes connecté";
                }
            ?>
            





            
        </div>
    </body>
</html>