
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
<body>


<!-- tester si l'utilisateur est connecté -->
 <?php 
        session_start();
        if($_SESSION['nomConnexion'] !== "")
        {
            $nomConnexion = $_SESSION['nomConnexion'];
        }
?>

<section class="page">


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
         //Trouver une condition qui dit que ca fait ca que si le nom de la company existe dans conso entreprise

          $_SESSION['nomConnexion'] = $nomConnexion;
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
          
          //echo 'prix petrole tot'.$_SESSION['PrixPetrolTot'].'';
          header('Location: paccueil.php');

      }
      else//Normalement ca va jamais ici
      {echo 'Pensez a rentrer les informations de votre entreprise';
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
    <a style="color: beige;"> Solution 1: Save money <?php echo $nomConnexion?> </a>
    </div>
    <div class="button">
        <button class="ceci est un bouton"> Log out </button>
    </div>
    <div class="button">
       <button onclick="window.location.href = 'pothercompanies.php';">See graphs of other companies</button>
   </div>

</nav>



<header>
<div class="header-section">
    <div class="header-section-1">
    <img src="https://cdn.pixabay.com/photo/2016/10/09/19/19/coins-1726618_960_720.jpg" height="60%" width="100%"/>
    
    <h3> Your actual solution </h3>
<h3>What you will have</h3>
<h3>Advices</h3>
<h5>
1) Do some insulation work. They give the right to energy certificates (CEE) of several 
hundred euros, to be valued in cash or in vouchers. Large-scale distribution and the main
 DIY stores transform the EECs into purchase vouchers. The energy suppliers, Total and Engie,
  convert the CEE into euros, by bank transfer. The association of consumers CLCV values the 
  CEE in euros but obliges to join (30 € per year). You can go through dedicated websites like:
   Primesecoenergie.com
   <br>
2) See the options proposed by the energy suppliers and look at the price of the subscription and the price of the kWh (see if it is in peak and off-peak hours or if it is a fixed rate)

</h5>
      <h5>Our estimation: 20% of the price in the offices of electricity saved, 10% on production electricity and 5% on transport consumptions</h5> 
  
  </div>

    <div class="header-section-2">
    <h2>
    <?php 
     //   session_start();
       
     //   if($_SESSION['nomConnexion'] !== "")
    //    {
        //    $nomConnexion = $_SESSION['nomConnexion'];

            //Data for tab
        //    if($_SESSION['consoElecTot'] !== "")
        //   {

            
            $consoElecTot=110000;
            $PrixElecTot=4600;
            $ConsoElecBureau=27500;
            $PrixElecBureau=1150;
            $ConsoProdElec=82500;
            $PrixProdElec=3450;
            $consoPetrolTot=8400;
            $PrixPetrolTot=15540;

            //Faire le tableau ici
          //  }

          //  else
          //  {
           //     echo "<script language='javascript' type='text/javascript'> location.href='maconso.php'</script>";
           // }
            
     //   }
      
?>
<!-- DIAGRAM 1:camembert -->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
        
              google.charts.load('current', {'packages':['corechart']});
        
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
        
                // Create the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Price');
                data.addColumn('number', 'euros');
                data.addRows([
                  ['Offices price',  <?php echo $PrixElecBureau?>],
                  ['Production price', <?php echo $PrixProdElec?>],
                  ['Transport price', <?php echo $PrixPetrolTot?>],
                  ['Money saved', <?php echo ($PrixElecBureau*0.2+$PrixProdElec*0.1+$PrixPetrolTot*0.05)?>],
                ]);
        
                var options = {'title':'Price repartition (in euros)',
                               'width':400,
                               'height':300};
        
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
              }
            </script>
                <div id="chart_div"></div>
           </h2>
    </div>
   <br>
    <br>
    <br>
</header>
</section>

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

    </body>
</html>