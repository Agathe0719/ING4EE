<!-- Verif que la connection fonctionne bien -->

<?php
$nbline=0;
    if(isset($_POST['submitConnexion']))
    {
        include("connexion.php");
        session_start();
        $nomConnexion = $_POST['nomConnexion'];
        $Password = $_POST['password'];

        // Pour tchequer toutes les lignes de la tab user
        //for($int i =0; $i<15; $i++)
    echo 'lolo';
    //$query = "SELECT COUNT(*) FROM user WHERE Company_Name='$nomConnexion' ";
    //$nbline = $con ->query($query);

    $req=mysqli_query($con, "SELECT COUNT(*) as cpt FROM user WHERE Company_Name='$nomConnexion' ");
    echo mysql_result($req,0);
    $nbline = $req->fetch();
    echo $nbline['cpt'];
    
    echo '<br>lulu</br>';
    
      echo $nbline;
      echo $query;
    
}
    
echo 'lalala';

// Comparer tous les companyName et password avec ceux rentrés par l'utilisateur



// Si la connection est effective, passage à la page suivante, page d'accueil

if($nbline==1)
    {
    echo "<script language='javascript' type='text/javascript'> location.href='pinscription.html'</script>";
    
}

//Si pas effective, message - Le mdp ou l'utilisateur est incorrect
else
{
  echo "<p>MDP or user name incorrect </p>";
  echo"<br> If you want you can see the website without connexion </br>";
}


?>