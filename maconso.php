<html>
<head>
	<title>
    Vous etes inscrits. Rentrez vos infos
  </title>
  
  <meta charset="UTF-8">
  <meta name="viewport" content=""width=device=width, initial-scale="1.0">
  <title>Information</title>
  <link rel="stylesheet" href="pinscription.css">
  
</head>
<body>

<header>
        <h1>New on this website? Record your datas!</h1>
</header>

<h3> We will analyse your datas</h3>


<?php
//Pour entrer les données (pour une nouvelle entreprise) dans sql
if(isset($_POST['submitnewInfomation'])){
        include("connexion.php");
        session_start();

        $namecompany = $_POST['namecompany'];//Recup d'avant ou reentrer le nom
        $consoelectot = $_POST['consoelectot'];
        $prixelectot = $_POST['prixelectot'];
        $consoelecbureau = $_POST['consoelecbureau'];
        $prixelecbureau = $_POST['prixelecbureau'];
        $consoprodelec = $_POST['consoprodelec'];
        $prixprodelec = $_POST['prixprodelec'];
        $consopetroltot = $_POST['consopetroltot'];
        $prixpetroltot = $_POST['prixpetroltot'];

        mysqli_query($con,"INSERT INTO conso_entreprise (Company_Name,consoElecTot,PrixElecTot,ConsoElecBureau,PrixElecBureau,ConsoProdElec,PrixProdElec,consoPetrolTot,PrixPetrolTot) 
            VALUES ('$namecompany','$consoelectot','$prixelectot','$consoelecbureau','$consoprodelec','$prixelecbureau','$prixprodelec','$consopetroltot','$prixpetroltot')");
   }

//Pour modifier les données d'une entreprise deja enregistree
//if(isset($_POST['modifInfomation'])){
   // include("connexion.php");
   // session_start();

 ?>


<form method="POST" class="form">

  <div class="form">
  	<label for="company">Name of your company: </label>
  	 <input type="text" name="namecompany" id="namecompany" required>
  	 <br>
    <label for="elecConso">Electric consumption: </label>
    <input type="text" name="consoelectot" id="consoelectot" required>
    <br>
    <label for="priceElecConso">Price of electric consumption: </label>
    <input type="text" name="prixelectot" id="prixelectot" required>
    <br>
    <label for="ConsoElecBureau">Consumption of offices: </label>
    <input type="text" name="consoelecbureau" id="consoelecbureau" required>
    <br>
    <label for="role">Price of consumprion of offices: </label>
    <input type="text" name="prixelecbureau" id="prixelecbureau" required>
    <br>
    <label for="phone">Consumption of electric production: </label>
    <input type="text" name="consoprodelec" id="consoprodelec" required>
    <br>
    <label for="role">Price of consumption of electric production: </label>
    <input type="text" name="prixprodelec" id="prixprodelec" required>
    <br>
    <label for="phone">Consumption of petrol and transport: </label>
    <input type="text" name="consopetroltot" id="consopetroltot" required>
    <br>
    <label for="role">Price of consumption petrol and transport: </label>
    <input type="text" name="prixpetroltot" id="prixpetroltot" required>
  </div>
  </div>

<br>
<br>

  <div class="form">
    <input type="submit" value="Send" name="submitnewInfomation">
  </div>


</form>
<footer>
</footer>

</body>
</html>
