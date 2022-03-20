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
        // session_start();
        // if($_SESSION['nomConnexion'] !== "")
        // {
        //     $nomConnexion = $_SESSION['nomConnexion'];
 
        //     //Data for tab
        //     if($_SESSION['consoElecTot'] !== "")
        //     {
        //     $consoElecTot=$_SESSION['consoElecTot'];
        //     $PrixElecTot=$_SESSION['PrixElecTot'];
        //     $ConsoElecBureau=$_SESSION['ConsoElecBureau'];
        //     $PrixElecBureau=$_SESSION['PrixElecBureau'];
        //     $ConsoProdElec=$_SESSION['ConsoProdElec'];
        //     $PrixProdElec=$_SESSION['PrixProdElec'];
        //     $consoPetrolTot=$_SESSION['consoPetrolTot'];
        //     $PrixPetrolTot=$_SESSION['PrixPetrolTot'];
 
          
        //     }
 
        //     else
        //     {
        //     //    echo "<script language='javascript' type='text/javascript'> location.href='maconso.php'</script>";
        //     }
           
            
 
        // }
 
             $consoElecTot=110000;
             $PrixElecTot=4600;
             $ConsoElecBureau=27500;
             $PrixElecBureau=1150;
             $ConsoProdElec=82500;
             $PrixProdElec=3450;
             $consoPetrolTot=8400;
             $PrixPetrolTot=15540;
?>



 <section class="page">
 
<nav>
    <div class="onglets">
    <a style="color: beige;"> Welcome <?php echo $nomConnexion?> </a>
    </div>
   
    <div class="boutons">
        <button onclick="window.location.href = 'logout.php';"> Log out </button>
 
    </div>
 
</nav>
</header>



<body>
<div class="container">
 
    <div class="left">
      <img src="https://cdn.pixabay.com/photo/2022/01/10/15/29/wind-mills-6928590_960_720.jpg" height="117%" width="100%"/>
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
 
        <div class="boutons">
              <button onclick="window.location.href = 'pothercompanies.php';">See graphs of other companies</button>
        </div>
     
      </div>
     
    </div>
 
    <div class="right">
      <div class="inside-right-top">
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
                  ['Offices',  <?php echo $PrixElecBureau?>],
                  ['Production', <?php echo $PrixProdElec?>],
                  ['Transport', <?php echo $PrixPetrolTot?>],
                ]);
        
                var options = {'title':'Price repartition in offices, production and transport(in euros)',
                               'width':500,
                               'height':300};
       
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
               }
              </script>
              <div id="chart_div"></div>
       
         
      </div>
  
 
      <div class="inside-right-bottom-l">
          <!-- // diagram double barres  -->
          <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
          <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);
 
          function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Type of consumption', 'Consumption', 'Price',],
                    ['Total energy consumption', <?php echo $consoElecTot?>,<?php echo $PrixElecTot?> ],
                    ['Offices consumption', <?php echo $ConsoElecBureau?>, <?php echo $PrixElecBureau?>],
                    ['Production consumption', <?php echo $ConsoProdElec?>, <?php echo $PrixProdElec?>]
        
                    ]);
 
            var options = {
              title: 'Company consumption',
              subtitle: 'Consumption in kwh and Price in euros',
              width: 300,
              height: 250,
             };
 
            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        </script>
        <div id="columnchart_material" style="width: 400px; height: 250px;"></div>
 
      </div>
 
      <div class="inside-right-bottom-r">
          <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
          <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);
 
          function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Type of consumption', 'Consumption', 'Price',],
              ['Transport consumption', <?php echo $consoPetrolTot?>,<?php echo $PrixPetrolTot?> ],
              ]);
 
            var options = {
              title: 'Transport Company consumption',
              subtitle: 'Consumption in Liter and Price in euros',
              width: 300,
              height: 250,  
            };
 
            var chart = new google.charts.Bar(document.getElementById('columnchart_materials'));
              chart.draw(data, google.charts.Bar.convertOptions(options));
              }
          </script>
          <div id="columnchart_materials" style="width: 400px; height: 250px;"></div>
           
          
      </div>
 
    </div>
     
 
    
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
