
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=""width=device=width, initial-scale="1.0">
	<title>Accueil</title>
<link rel="stylesheet" href="paccueil.css">

</head>
<body>

<section class="page">

<nav>
    <div class="onglets">
    <a href="pgraphs.html" style="color: beige;">My Consumption </a>
<a href="psolution.html" style="color: beige;">Advices and solutions</a>
<a href="plogin.php" style="color: beige;">My Profile</a>
    </div>
    <div class="boutons">
        <button class="ceci est un bouton">See graphs of other companies</button>
    </div>
</nav>


<!-- tester si l'utilisateur est connecté -->
<?php
                session_start();
                if($_SESSION['nomConnexion'] !== ""){
                    $nomConnexion = $_SESSION['nomConnexion'];
                    // afficher un message
                    echo "Bonjour $nomConnexion, vous êtes connecté";
                    
                }
            ?>
            



<header>
    <h1>Hello company <?php echo $nomConnexion?>. </h1>
    <h3>We analyzed your datas.  Now you can see our graphs advices and solutions.</h3>
</header>
</section>

<footer>
    <h3>Contact us </h3>
    <div class="colonnes">
    <div class="colonne"> 
        <p>E-mail</p>
        <p>aca@gmail.com</p>
    </div>
    <div class="colonne"> 
        <p>Phone</p>
        <p>+33-1-76-45-29-72</p>
    </div>
    <div class="colonne"> 
        <p>Location</p>
        <p>10 rue Sexius Michel, 75015, Paris</p>
    </div>
    <div class="colonne"> 
        <p>FAQ</p>
        <p>About Us</p>
    </div>
    
</div>


</footer>

    </body>
</html>