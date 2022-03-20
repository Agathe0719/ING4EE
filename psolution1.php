
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=""width=device=width, initial-scale="1.0">
	<title>Accueil</title>
<link rel="stylesheet" href="psolution1.css">
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
            <!-- tester si l'utilisateur est connecté -->
 <?php 
        // session_start();
        // if($_SESSION['nomConnexion'] !== "")
        // {
        //     $nomConnexion = $_SESSION['nomConnexion'];

            //Data for tab
        //    if($_SESSION['consoElecTot'] !== "")
        //   {

        //   if($_SESSION['consoElecTot'] !== "")
        //   {
        //   $consoElecTot=$_SESSION['consoElecTot'];
        //   $PrixElecTot=$_SESSION['PrixElecTot'];
        //   $ConsoElecBureau=$_SESSION['ConsoElecBureau'];
        //   $PrixElecBureau=$_SESSION['PrixElecBureau'];
        //   $ConsoProdElec=$_SESSION['ConsoProdElec'];
        //   $PrixProdElec=$_SESSION['PrixProdElec'];
        //   $consoPetrolTot=$_SESSION['consoPetrolTot'];
        //   $PrixPetrolTot=$_SESSION['PrixPetrolTot'];
        //   }
             $consoElecTot=110000;
             $PrixElecTot=4600;
             $ConsoElecBureau=27500;
             $PrixElecBureau=1150;
             $ConsoProdElec=82500;
             $PrixProdElec=3450;
             $consoPetrolTot=8400;
             $PrixPetrolTot=15540;

 //       }  
?>

<section class="page">


<nav>
    <div class="onglets">
    <a style="color: beige;"> Welcome <?php echo $nomConnexion?> </a>
    </div>
   
    <div class="button">
      <button onclick="window.location.href = 'logout.php';"> Log out </button>
        </div>
</nav>

</header>

<body>
    <div class="container1">

    <div class="cimage">

      <img src="https://cdn.pixabay.com/photo/2016/10/09/19/19/coins-1726618_960_720.jpg" height="100%" width="100%"/>

      <div class="inside-left-text">
      <h1 style="color: black;"> Solution 1: Save money <?php echo $nomConnexion?> </h1>
      </div>
      
      </div>
      
    </div>

    <h3>Advices</h3>
            <p>
                1) Do some insulation work. They give the right to energy certificates (CEE) of several 
            hundred euros, to be valued in cash or in vouchers. Large-scale distribution and the main
            DIY stores transform the EECs into purchase vouchers. The energy suppliers, Total and Engie,
            convert the CEE into euros, by bank transfer. The association of consumers CLCV values the 
            CEE in euros but obliges to join (30 € per year). You can go through dedicated websites like:
            Primesecoenergie.com
            <br>
                2) See the options proposed by the energy suppliers and look at the price of the subscription and the price of the kWh (see if it is in peak and off-peak hours or if it is a fixed rate)

            </p>
            <p>Our estimation: 20% of the price in the offices of electricity saved, 10% on production electricity and 5% on transport consumptions</p> 


<div class="container2">

    <div class="left">
      
      <div class="inside-left">
            <h2>
            <p> Your actual situation </p>
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
                ]);
        
                var options = {'title':'Price repartition (in euros)',
                               'width':600,
                               'height':400,
                            };
        
                var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
                chart.draw(data, options);
              }
            </script>
                <div id="chart_div1"></div>
           </h2> 
      
      </div>
      
    </div>
    <div class="right">
      <div class="inside-right">
            <h2>
            <p> What you will have </p>
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
                               'width':600,
                               'height':400};
        
                var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
                chart.draw(data, options);
              }
            </script>
                <div id="chart_div2"></div>
           </h2>
        
         
        </div>
   
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
</div>
            

    <br>
    <br>
    <br>

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