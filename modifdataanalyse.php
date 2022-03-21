<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>
    Modification d'informations
  </title>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="" width=device=width, initial-scale="1.0">
  <link rel="stylesheet" href="pinscription.css">

</head>
<body>

<header>
        <h1>You have already register your datas ! You can modify them</h1>
</header>

<h3>Write only where you want to change</h3>


<?php
session_start();
if($_SESSION['nomConnexion'] !== ""){
    $nomConnexion = $_SESSION['nomConnexion'];
  }

else//Ne va jamais la normalment
{
  echo 'Test1 si pb';
    $nomConnexion='Test1';
}


//To modify the data of a company already saved in sql
if(isset($_POST['modifyInfomation'])){
        include("connexion.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
//1
        if(!empty($_POST['consoelectot2']))//if case non empty : modify sql value with the new value
        {
            $consoelectot = $_POST['consoelectot2'];
            echo ''.$nomConnexion.'';
            mysqli_query($con,"UPDATE conso_entreprise SET ConsoElecTot='$consoelectot' WHERE Company_Name='$nomConnexion'");
        }
//2
        if(!empty($_POST['prixelectot']))
        {
          $prixelectot = $_POST['prixelectot'];
          mysqli_query($con,"UPDATE conso_entreprise SET PrixElecTot='$prixelectot' WHERE Company_Name='$nomConnexion'");
        }  
// 3
        if(!empty($_POST['consoelecbureau']))
        {
            $consoelecbureau = $_POST['consoelecbureau'];
            mysqli_query($con,"UPDATE conso_entreprise SET ConsoElecBureau='$consoelecbureau' WHERE Company_Name='$nomConnexion'");
        }
// 4
        if(!empty($_POST['prixelecbureau']))
        {
          $prixelecbureau = $_POST['prixelecbureau'];
          mysqli_query($con,"UPDATE conso_entreprise SET PrixElecBureau='$prixelecbureau' WHERE Company_Name='$nomConnexion'");
        }
// 5
      if(!empty($_POST['consoprodelec']))
        {
            $consoprodelec = $_POST['consoprodelec'];
            mysqli_query($con,"UPDATE conso_entreprise SET ConsoProdElec='$consoprodelec' WHERE Company_Name='$nomConnexion'");
        }

// 6
      if(!empty($_POST['prixprodelec']))
      {
      $prixprodelec = $_POST['prixprodelec'];
      mysqli_query($con,"UPDATE conso_entreprise SET PrixProdElec='$prixprodelec' WHERE Company_Name='$nomConnexion'");
      }
// 7
      if(!empty($_POST['consopetroltot']))
      {
       $consopetroltot = $_POST['consopetroltot'];
       mysqli_query($con,"UPDATE conso_entreprise SET consoPetrolTot='$consopetroltot' WHERE Company_Name='$nomConnexion'");
      }
// 8
      if(!empty($_POST['prixpetroltot']))
      {
      $prixpetroltot = $_POST['prixpetroltot'];
      mysqli_query($con,"UPDATE conso_entreprise SET PrixPetrolTot='$prixpetroltot' WHERE Company_Name='$nomConnexion'");
      }


}

        //Une fois que les valeurs ont ete remise a jour modifier mes sessions :

        // $_SESSION['nomConnexion'] = $nomConnexion;
         $requete2 = "SELECT * FROM conso_entreprise where Company_Name = '".$nomConnexion."' ";
         $exec_requete2 = mysqli_query($con,$requete2);
         $tab_user     = mysqli_fetch_object($exec_requete2);
         $_SESSION['consoElecTot'] = $tab_user->consoElecTot;
         $_SESSION['PrixElecTot'] = $tab_user->PrixElecTot;
         $_SESSION['ConsoElecBureau'] = $tab_user->ConsoElecBureau;
         $_SESSION['PrixElecBureau'] = $tab_user->PrixElecBureau;
         $_SESSION['ConsoProdElec'] = $tab_user->ConsoProdElec;
         $_SESSION['PrixProdElec'] = $tab_user->PrixProdElec;
         $_SESSION['consoPetrolTot'] = $tab_user->consoPetrolTot;
         $_SESSION['PrixPetrolTot'] = $tab_user->PrixPetrolTot;


        //Une fois que tout est mis a jour va sur paccueilconnecte, il faudra recharger le nouveau tableau
        echo "<script> location.href='paccueilconnecte.php'</script>";
        }
       
   


 ?>


<form method="POST" class="form">

  <div class="form">
  	<label for="consoelectot2">Electric consumption: </label>
    <input type="text" name="consoelectot2" id="consoelectot2" >
    <br>
    <label for="prixelectot">Price of electric consumption: </label>
    <input type="text" name="prixelectot" id="prixelectot" >
    <br>
    <label for="consoelecbureau">Consumption of offices: </label>
    <input type="text" name="consoelecbureau" id="consoelecbureau" >
    <br>
    <label for="prixelecbureau">Price of consumprion of offices: </label>
    <input type="text" name="prixelecbureau" id="prixelecbureau" >
    <br>
    <label for="consoprodelec">Consumption of electric production: </label>
    <input type="text" name="consoprodelec" id="consoprodelec" >
    <br>
    <label for="prixprodelec">Price of consumption of electric production: </label> 
    <input type="text" name="prixprodelec" id="prixprodelec" >
    <br>
    <label for="consopetroltot">Consumption of petrol and transport: </label>
    <input type="text" name="consopetroltot" id="consopetroltot" >
    <br>
    <label for="prixpetroltot">Price of consumption petrol and transport: </label>
    <input type="text" name="prixpetroltot" id="prixpetroltot" >
 

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
