<?php
session_start();
if($_SESSION['nomConnexion'] !== ""){
    $nomConnexion = $_SESSION['nomConnexion'];
    
    $requete = "SELECT count(*) FROM conso_entreprise where 
    Company_Name = '".$nomConnexion."' ";
    $exec_requete = mysqli_query($con,$requete);
    $reponse      = mysqli_fetch_array($exec_requete);
    $count = $reponse['count(*)'];
//reponse
      if($count!=0) // nom d'utilisateur et mot de passe correctes
       {
          $_SESSION['nomConnexion'] = $nomConnexion;
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
          
          echo prix petro tot'$_SESSION['PrixPetrolTot']';
          //header('Location: paccueil.php');

  }

  ?>