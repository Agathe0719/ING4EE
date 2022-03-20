<html>
<head>

</head>

<?php

  $nbline=0;
  include("connexion.php");
  session_start();
 ?>
<!--  
<?php
  //Chargement de la table CONSO_ENTREPRISE 1
         
          $requete = "SELECT count(*) FROM conso_entreprise where Company_Name = 'Bofinder SARL' ";
          $exec_requete = mysqli_query($con,$requete);
          $reponse      = mysqli_fetch_array($exec_requete);
          $count = $reponse['count(*)'];

      if($count!=0)
       {
          $nomConnexion='Bofinder SARL';
          $requete2 = "SELECT * FROM conso_entreprise where Company_Name = 'Bofinder SARL' ";
          $exec_requete2 = mysqli_query($con,$requete2);
          $tab_user     = mysqli_fetch_object($exec_requete2);
          $consoElecTot1 = $tab_user->consoElecTot;
          $PrixElecTot1 = $tab_user->PrixElecTot;
          $ConsoElecBureau1 = $tab_user->ConsoElecBureau;
          $PrixElecBureau1 = $tab_user->PrixElecBureau;
          $ConsoProdElec1 = $tab_user->ConsoProdElec;
          $PrixProdElec1 = $tab_user->PrixProdElec;
          $consoPetrolTot1 = $tab_user->consoPetrolTot;
          $PrixPetrolTot1 = $tab_user->PrixPetrolTot;
?>
-->
<?php    
          //Test cam antoine
          $nomConnexion='Bofinder SARL';
          $consoElecTot1 = '1000';
          $PrixElecTot1 = '2345';
          $ConsoElecBureau1 = '3456';
          $PrixElecBureau1 = '1234';
          $ConsoProdElec1 = '1234';
          $PrixProdElec1 = '345';
          $consoPetrolTot1 ='4567';
          $PrixPetrolTot1 = '2345';

          echo 'prix petrole tot'.$PrixPetrolTot1.'';
          //header('Location: paccueilconnecte.php');


      }

      //Chargement de la table CONSO_ENTREPRISE 2
         
      $requete = "SELECT count(*) FROM conso_entreprise where Company_Name = '3R' ";
      $exec_requete = mysqli_query($con,$requete);
      $reponse      = mysqli_fetch_array($exec_requete);
      $count = $reponse['count(*)'];

  if($count!=0)
   {
      $nomConnexion2='3R';
      $requete2 = "SELECT * FROM conso_entreprise where Company_Name = '3R' ";
      $exec_requete2 = mysqli_query($con,$requete2);
      $tab_user2     = mysqli_fetch_object($exec_requete2);
      $consoElecTot2 = $tab_user2->consoElecTot;
      $PrixElecTot2 = $tab_user2->PrixElecTot;
      $ConsoElecBureau2 = $tab_user2->ConsoElecBureau;
      $PrixElecBureau2 = $tab_user2->PrixElecBureau;
      $ConsoProdElec2 = $tab_user2->ConsoProdElec;
      $PrixProdElec2 = $tab_user2->PrixProdElec;
      $consoPetrolTot2 = $tab_user2->consoPetrolTot;
      $PrixPetrolTot2 = $tab_user2->PrixPetrolTot;
      
      echo 'prix petrole tot'.$PrixPetrolTot2.'';
      echo 'nom co 2 : '.$nomConnexion2.' ';
      

  }

  //Chargement de la table CONSO_ENTREPRISE 3
         
  $requete = "SELECT count(*) FROM conso_entreprise where Company_Name = 'SA Meubles Morin' ";
  $exec_requete = mysqli_query($con,$requete);
  $reponse      = mysqli_fetch_array($exec_requete);
  $count = $reponse['count(*)'];

if($count!=0)
{
  $nomConnexion3='SA Meubles Morin';
  $requete3 = "SELECT * FROM conso_entreprise where Company_Name = 'SA Meubles Morin' ";
  $exec_requete3 = mysqli_query($con,$requete3);
  $tab_user3     = mysqli_fetch_object($exec_requete3);
  $consoElecTot3 = $tab_user3->consoElecTot;
  $PrixElecTot3 = $tab_user3->PrixElecTot;
  $ConsoElecBureau3 = $tab_user3->ConsoElecBureau;
  $PrixElecBureau3 = $tab_user3->PrixElecBureau;
  $ConsoProdElec3 = $tab_user3->ConsoProdElec;
  $PrixProdElec3 = $tab_user3->PrixProdElec;
  $consoPetrolTot3 = $tab_user3->consoPetrolTot;
  $PrixPetrolTot3 = $tab_user3->PrixPetrolTot;
  
  echo 'prix petrole tot'.$PrixPetrolTot3.'';
  

}
  

 ?>

<body>
    <h1>Graphs of other companies</h1>
</body>





    </html>