<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=""width=device=width, initial-scale="1.0">
	<title>Accueil</title>
<link rel="stylesheet" href="paccueilconnecte.css">
<style> button {
  display: inline-block;
  background-color: beige;
  border-radius: 20px;
 color:black;
  text-align: center;
  font-size: 20px;
  cursor: pointer;
}
</style>
</head>

<header>
<!-- si l'utilisateur est connecté -->
<?php 
        session_start();
        if($_SESSION['nomConnexion'] !== "")
        {
            $nomConnexion = $_SESSION['nomConnexion'];

            //Data for tab
            if($_SESSION['consoElecTot'] !== "")
            {

            
            $consoElecTot=$_SESSION['consoElecTot'];
            $PrixElecTot=$_SESSION['PrixElecTot'];
            $ConsoElecBureau=$_SESSION['ConsoElecBureau'];
            $PrixElecBureau=$_SESSION['PrixElecBureau'];
            $ConsoProdElec=$_SESSION['ConsoProdElec'];
            $PrixProdElec=$_SESSION['PrixProdElec'];
            $consoPetrolTot=$_SESSION['consoPetrolTot'];
            $PrixPetrolTot=$_SESSION['PrixPetrolTot'];

            //Faire le tableau ici
            }

            else
            {
                echo "<script language='javascript' type='text/javascript'> location.href='maconso.php'</script>";
            }
            
            

        }
?>

<!-- <section class="page"> -->


<!-- LOG OUT
<?php 
if(isset($_POST['nombouton']))
{
  include("connexion.php");
  session_start();
  $nomConnexion = $_POST['nomConnexion'];

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
}
?>

-->

<nav>
    <div class="onglets">
    <a style="color: beige;"> Welcome <?php echo $nomConnexion?> </a>
    </div>
    <div class="boutons">
        <button class="ceci est un bouton"> Log out </button>
    </div>
</nav>
</header>


<body>

<div class="container">

    <div class="left">
      <img src="https://cdn.pixabay.com/photo/2022/01/10/15/29/wind-mills-6928590_960_720.jpg" height="100%" width="100%"/>
      <div class="inside-left-text">
        <h1> HELLO <?php echo $nomConnexion?>. </h1>
        <p> We analyzed you data so now you can see our graphs, advices and solutions</p>
      
      </div>
      
      <div class="inside-left-button">
        <div class="button">
              <button onclick="window.location.href = 'modifdataanalyse.php';">Update my data</button>
        </div>

        <div class="button">
              <button onclick="window.location.href = 'psolution.php';">See our advices and solution</button>
        </div>
      
      </div>
      
    </div>

    <div class="right">
      <div class="inside-right">
        
      </div>
      <h2>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
        
              google.charts.load('current', {'packages':['corechart']});
        
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
        
                // Create the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Place');
                data.addColumn('number', 'kwH');
                data.addRows([
                  ['Offices', 2],
                  ['Factory A', 4],
                  ['Factory B', 3],
                  
                ]);
        
              var options = {'title':'Average NRJ consumption of your different department  on 1 year',
                               'width':600,
                               'height':600};
        
              var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
              chart.draw(data, options);
              }
          </script>
              <div id="chart_div"></div> 
      </h2>
    </div>
  </div>
</section>

</body>


<footer>
    <h3>Contact us </h3>
    <div class="colonnes">
    <div class="colonne"> 
        <p>E-mail</p>
        <p>aca@gmail.com</p>
    </div>
    <div class="colonne"> 
        <p>Phone</p>
        <p>+33-1-76-45-29-72</p>
    </div>
    <div class="colonne"> 
        <p>Location</p>
        <p>10 rue Sexius Michel, 75015, Paris</p>
    </div>
    <div class="colonne"> 
        <p>FAQ</p>
        <p>About Us</p>
    </div>
    
</div>


</footer>

</html>