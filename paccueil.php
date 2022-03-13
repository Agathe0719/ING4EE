
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
<a href="" style="color: beige;">My Profile</a>
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
    <h1>Hello company <?php echo $nomConnexion?>. We analyzed your datas.  Now you can see our graphs advices and solutions.</h1>
</header>
</section>

<footer>
    <h5>Contact us </h5>
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
        <p>Adress</p>
        <p>10 rue Sexius Michel, 75015, Paris</p>
    </div>
    <div class="colonne"> 
        <p>FAQ</p>
        <p>About Us</p>
    </div>
    
</div>

<p>Leseche, Martinet, Vittiglio</p>

</footer>

    </body>
</html>