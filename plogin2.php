<?xml version="1.0" encoding="UTF-8"?>
<project-private xmlns="http://www.netbeans.org/ns/project-private/1">
    <editor-bookmarks xmlns="http://www.netbeans.org/ns/editor-bookmarks/2" lastBookmarkId="0"/>
    <open-files xmlns="http://www.netbeans.org/ns/projectui-open-files/2">
        <group/>
    </open-files>
</project-private>


<html>
<head>
	<title>
	     Projet
	</title>

</head>
<body>

<header>
	<h1>
	Welcome to ACA	
   <p>The website for your energy consumption</p> 
	</h1>

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

//Si jamais le mdp et l'id correspondent au sql :
  $sql = mysqli_query($con, "SELECT * FROM user WHERE Company_Name = '$nomConnexion' and Password = '$Password'");
  $nbline = mysqli_num_rows($sql);      
  
  
// Si la connection est ok, passage à la page suivante, page d'accueil
  if($nbline==1)//+ remet cpt a 3
    {
    echo "<script language='javascript' type='text/javascript'> location.href='pinscription.html'</script>";
    }

//Si pas effective, message Le mdp ou l'utilisateur est incorrect
else
{
  //Relance la page login avec 1 chance en moins pour reussir le code
 //echo "<script language='javascript' type='text/javascript'> location.href='plogin2.php'</script>";
 ?>
 <p>MDP or user name incorrect. Try again</p>
 <?php
}
}
?>


  <br>
  <br>

<p>Not already registered? Want some advices?</p>
<p>Click here: <a href="pinscription.php"> Inscription </a> </p>

</form>
<footer>
</footer>

</body>
</html>