<html>
<head>
	<title>
    Modification d'informations
  </title>
  
  <meta charset="UTF-8">
  <meta name="viewport" content=""width=device=width, initial-scale="1.0">
  <title>Information2</title>
  <link rel="stylesheet" href="pinscription.css">
  
</head>
<body>

<header>
        <h1>You have already register your datas ! You can modify them</h1>
</header>

<h3>Write where you want to change et 0 sinon</h3>


<?php
session_start();
if($_SESSION['nomConnexion'] !== ""){
    $nomConnexion = $_SESSION['nomConnexion'];
    $mail = $_SESSION['newemail'];
    echo 'Le mail est '.$mail.'!';
  }

else
{
    $nomConnexion='Test1';
}


//Pour modifier les données d'une entreprise deja enregistree dans sql
if(isset($_POST['modifyInfomation'])){
        include("connexion.php");
        echo 'lala';
        if('consoelectot2'!="0")
        {
            $consoelectot = $_POST['consoelectot2'];
            mysqli_query($con,"UPDATE 'conso_entreprise' SET 'ConsoElecTot'='consoelectot2' WHERE 'Company_Name'='$nomConnexion'");
            echo 'salut';
        }
        // $prixelectot = $_POST['prixelectot'];
        // $consoelecbureau = $_POST['consoelecbureau'];
        // $prixelecbureau = $_POST['prixelecbureau'];
        // $consoprodelec = $_POST['consoprodelec'];
        // $prixprodelec = $_POST['prixprodelec'];
        // $consopetroltot = $_POST['consopetroltot'];
        // $prixpetroltot = $_POST['prixpetroltot'];

       
   }


 ?>


<form method="POST" class="form">

  <div class="form">
  	<label for="elecConso">Electric consumption: </label>
    <input type="text" name="consoelectot2" id="consoelectot2" required>
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
    <!-- <label for="role">Price of consumption of electric production: </label> 
    <input type="text" name="prixprodelec" id="prixprodelec" required>
    <br>
    <label for="phone">Consumption of petrol and transport: </label>
    <input type="text" name="consopetroltot" id="consopetroltot" required>
    <br>
    <label for="role">Price of consumption petrol and transport: </label>
    <input type="text" name="prixpetroltot" id="prixpetroltot" required>
  -->
  </div>
  </div>

<br>
<br>

  <div class="form">
    <input type="submit" value="Modify" name="modifyInfomation">
  </div>


</form>
<footer>
</footer>

</body>
</html>
