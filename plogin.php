<!-- Verif que la connection fonctionne bien -->

<?php
$nbline=0;
$compteur=3;
    if(isset($_POST['submitConnexion']))
    {
        include("connexion.php");
        session_start();
        $nomConnexion = $_POST['nomConnexion'];
        $Password = $_POST['password'];

//Si jamais le mdp et l'id correspondent au sql :
        $sql = mysqli_query($con, "SELECT * FROM user WHERE Company_Name = '$nomConnexion' and Password = '$Password'");
        $nbline = mysqli_num_rows($sql);
        
      echo $nbline;  
      echo $compteur;
  
// Si la connection est effective, passage à la page suivante, page d'accueil

if($nbline==1)
    {
    $compteur=0;
    //echo "<script language='javascript' type='text/javascript'> location.href='pinscription.html'</script>";
    echo 't as reussi ptn de merde';   
    }

//Si pas effective, message - Le mdp ou l'utilisateur est incorrect
else
{
  $compteur=$compteur-1;
  
 echo "<script language='javascript' type='text/javascript'> location.href='plogin.html'</script>";
  echo "<p>MDP or user name incorrect </p>";

  if ($compteur=0)
  {echo "<script language='javascript' type='text/javascript'> location.href='pinscription.html'</script>";}
}

}

?>