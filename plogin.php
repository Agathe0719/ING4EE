<?xml version="1.0" encoding="UTF-8"?>
<project-private xmlns="http://www.netbeans.org/ns/project-private/1">
    <editor-bookmarks xmlns="http://www.netbeans.org/ns/editor-bookmarks/2" lastBookmarkId="0"/>
    <open-files xmlns="http://www.netbeans.org/ns/projectui-open-files/2">
        <group/>
    </open-files>
</project-private>

<html lang="en">
<head>
<title>
	     Projet
	</title>

    <meta charset="UTF-8">
    <meta name="viewport" content=""width=device=width, initial-scale="1.0">
	<title>Graphs</title>
<link rel="stylesheet" href="plogin.css">
    
  </head>

<body>

<header>
	<h1>
	Welcome to ACA	
 
	</h1>
<h5> The website for your energy consumption</h5>
</header>


<form method="POST" class="form">

  <div class="form">
  	<label for="name">Name of your company: </label>
  	 <input type="text" name="nomConnexion" id="nomConnexion" required>
  	 <br>	
  </div>
<br>
  <div class="form">
    <label for="password">Password: </label>
    <input type="text" name="password" id="password" required>
    <br>

  </div>
  <br>
  <div class="form">
    <input type="submit" value="Send" name="submitConnexion">
  </div>



  <?php
if(isset($_POST['submitConnexion']))
{
  $nbline=0;
  include("connexion.php");
  session_start();
  $nomConnexion = $_POST['nomConnexion'];
  $Password = $_POST['password'];

//Si jamais le mdp et l'id correspondent au sql : $nbline=1 sinon 0
  $sql = mysqli_query($con, "SELECT * FROM user WHERE Company_Name = '$nomConnexion' and Password = '$Password'");
  $nbline = mysqli_num_rows($sql);      
  
  
// Si la connection est ok, passage à la page suivante, page d'accueil
  if($nbline==1)
    {//Pour la table USER
      $requete = "SELECT count(*) FROM user where 
      Company_Name = '".$nomConnexion."' and Password = '".$Password."' ";
      $exec_requete = mysqli_query($con,$requete);
      $reponse      = mysqli_fetch_array($exec_requete);
      $count = $reponse['count(*)'];
//reponse
      if($count!=0) // nom d'utilisateur et mot de passe correctes
       {
          $_SESSION['nomConnexion'] = $nomConnexion;
          $requete2 = "SELECT * FROM user where Company_Name = '".$nomConnexion."' ";
          $exec_requete2 = mysqli_query($con,$requete2);
          $tab_user     = mysqli_fetch_object($exec_requete2);
          $_SESSION['password'] = $tab_user->Password;
          $_SESSION['newemail'] = $tab_user->Email;
          $_SESSION['Phone'] = $tab_user->Phone;
          $_SESSION['id'] = $tab_user->ID;
          
         

    //echo "<script language='javascript' type='text/javascript'> location.href='paccueil.php'</script>";
    
  //Chargement de la table CONSO_ENTREPRISE
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
         //Trouver une condition qui dit que ca fait ca que si le nom de la company existe dans conso entreprise

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
          
          //echo 'prix petrole tot'.$_SESSION['PrixPetrolTot'].'';
          //header('Location: paccueil.php');

      }
      else
      {echo 'Pensez a rentrer les informations de votre entreprise';}
}
  
  }
  }
//Si pas effective, message Le mdp ou l'utilisateur est incorrect
else
{
 ?>

  ?>
 <!-- on ferme php car le texte est en html -->
 <p style='color:red'> MDP incorrect for company <?php echo $nomConnexion?>. Try again</p>
 <?php
}
}
?>
  <br>
  <br>

<p>Not already registered? Want some advices?</p>
<p>Click here: <a href="pinscription.html"> Inscription </a> </p>

</form>
<footer>
</footer>

</body>
</html>