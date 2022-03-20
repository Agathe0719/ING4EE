
<?php 

  include("connexion.php");
  session_start();

  if($_SESSION['nomConnexion'] !== ""){
    $nomConnexion = $_SESSION['nomConnexion'];
    
    $requete = "SELECT count(*) FROM conso_entreprise where 
    Company_Name = '".$nomConnexion."' ";
    $exec_requete = mysqli_query($con,$requete);
    $reponse      = mysqli_fetch_array($exec_requete);
    $count = $reponse['count(*)'];

      if($count!=0) // if nom d'utilisateur existe dans la deuxieme table, on vide toutes les sessions
       {
          $_SESSION['nomConnexion'] = "";
          //Table conso
          $_SESSION['consoElecTot'] = "";
          $_SESSION['PrixElecTot'] = "";
          $_SESSION['ConsoElecBureau'] = "";
          $_SESSION['PrixElecBureau'] = "";
          $_SESSION['ConsoProdElec'] = "";
          $_SESSION['PrixProdElec'] = "";
          $_SESSION['consoPetrolTot'] = "";
          $_SESSION['PrixPetrolTot'] = "";
        //Table user
          $_SESSION['password'] ="";
          $_SESSION['newemail'] = "";
          $_SESSION['Phone'] = "";
          $_SESSION['id'] = "";
          
          echo 'Session deconnectee';
          //Deconnection de mySQL
          session_destroy();
          //Send on paccueil, page which everybody has access
          header('Location: paccueil.php');

      }
      else//Normalement ca va jamais ici
      {echo 'Suppression data in code';
        $_SESSION['consoElecTot'] = "";
        $_SESSION['PrixElecTot'] = "";
        $_SESSION['ConsoElecBureau'] = "";
        $_SESSION['PrixElecBureau'] = "";
        $_SESSION['ConsoProdElec'] = "";
        $_SESSION['PrixProdElec'] = "";
        $_SESSION['consoPetrolTot'] = "";
        $_SESSION['PrixPetrolTot'] = "";
      }
}

?>

