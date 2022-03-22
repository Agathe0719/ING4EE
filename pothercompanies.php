<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=""width=device=width, initial-scale="1.0">
  <title>Accueil</title>
<link rel="stylesheet" href="pothercompanies.css">
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

<?php
  $nbline=0;
  include("connexion.php");
  session_start();
 ?>

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

          
          //Test sans sql
          // $nomConnexion1='Bofinder SARL';
          // $consoElecTot1 = '1000';
          // $PrixElecTot1 = '2345';
          // $ConsoElecBureau1 = '3456';
          // $PrixElecBureau1 = '1234';
          // $ConsoProdElec1 = '1234';
          // $PrixProdElec1 = '345';
          // $consoPetrolTot1 ='4567';
          // $PrixPetrolTot1 = '2345';

          //echo 'prix petrole tot'.$PrixPetrolTot1.'';
          
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
     } 
      

 //Test cam antoine 2
//  $nomConnexion2='3R';
//  $consoElecTot2 = '1362';
//  $PrixElecTot2 = '333';
//  $ConsoElecBureau2 = '567';
//  $PrixElecBureau2 = '4444';
//  $ConsoProdElec2 = '14';
//  $PrixProdElec2 = '3405';
//  $consoPetrolTot2 ='47';
//  $PrixPetrolTot2 = '350';
  

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
}

 //Test cam antoine 3
//  $nomConnexion3='SA Meubles Morin';
//  $consoElecTot3 = '4000';
//  $PrixElecTot3 = '235';
//  $ConsoElecBureau3 = '123';
//  $PrixElecBureau3= '34';
//  $ConsoProdElec3 = '1234';
//  $PrixProdElec3 = '235';
//  $consoPetrolTot3='456';
//  $PrixPetrolTot3 = '6666';
  
 ?>

 <section class="page">
 
<nav>
    <div class="onglets">
    <a style="color: beige;"> <h1>Graphs of other companies</h1> </a>
    </div>
   
    <div class="boutons">
        <button onclick="window.location.href = 'logout.php';"> Log out </button>
 
    </div>
 
</nav>
</header>

<body>
  
<h3 style="margin-left : 50px"> Data of <?php echo $nomConnexion?>. </h3>

<h3 style="margin-left : 50px"> Data of <?php echo $nomConnexion2?>. </h3>

<h3 style="margin-left : 50px"> Data of <?php echo $nomConnexion3?>. </h3>
<div class="container">


    <div class="left">
        
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
                  ['Offices',  <?php echo $PrixElecBureau1?>],
                  ['Production', <?php echo $PrixProdElec1?>],
                  ['Transport', <?php echo $PrixPetrolTot1?>],
                ]);
        
                var options = {'title':'Price repartition in offices, production and transport(in euros)',
                               'width':500,
                               'height':300};
       
                var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
                chart.draw(data, options);
               }
              </script>
              <div id="chart_div1"></div>

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
              ['Offices',  <?php echo $PrixElecBureau2?>],
              ['Production', <?php echo $PrixProdElec2?>],
              ['Transport', <?php echo $PrixPetrolTot2?>],
            ]);
    
            var options = {'title':'Price repartition in offices, production and transport(in euros)',
                           'width':500,
                           'height':300};
   
            var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
            chart.draw(data, options);
           }
          </script>
          <div id="chart_div2"></div>
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
              ['Offices',  <?php echo $PrixElecBureau3?>],
              ['Production', <?php echo $PrixProdElec3?>],
              ['Transport', <?php echo $PrixPetrolTot3?>],
            ]);
    
            var options = {'title':'Price repartition in offices, production and transport(in euros)',
                           'width':500,
                           'height':300};
   
            var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
            chart.draw(data, options);
           }
          </script>
          <div id="chart_div3"></div>

     </div>

       
    <div class="middle">
   
  <!-- // diagram double barres  -->
          <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
         
          <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);
 
          function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Type of consumption', 'Consumption', 'Price',],
                    ['Total energy consumption', <?php echo $consoElecTot1?>,<?php echo $PrixElecTot1?> ],
                    ['Offices consumption', <?php echo $ConsoElecBureau1?>, <?php echo $PrixElecBureau1?>],
                    ['Production consumption', <?php echo $ConsoProdElec1?>, <?php echo $PrixProdElec1?>]
        
                    ]);
 
            var options = {
              title: 'Company consumption',
              subtitle: 'Consumption in kwh and Price in euros',
              width: 300,
              height: 250,
             };
 
            var chart = new google.charts.Bar(document.getElementById('columnchart_material1'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        </script>
        <div id="columnchart_material1" style="width: 400px; height: 250px;"></div>
         <br>
         <br>
         <br>
      <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Type of consumption', 'Consumption', 'Price',],
                ['Total energy consumption', <?php echo $consoElecTot2?>,<?php echo $PrixElecTot2?> ],
                ['Offices consumption', <?php echo $ConsoElecBureau2?>, <?php echo $PrixElecBureau2?>],
                ['Production consumption', <?php echo $ConsoProdElec2?>, <?php echo $PrixProdElec2?>]
    
                ]);

        var options = {
          title: 'Company consumption',
          subtitle: 'Consumption in kwh and Price in euros',
          width: 300,
          height: 250,
         };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
    </script>
    <div id="columnchart_material2" style="width: 400px; height: 250px;"></div>
    
         <br>
         <br>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Type of consumption', 'Consumption', 'Price',],
                ['Total energy consumption', <?php echo $consoElecTot3?>,<?php echo $PrixElecTot3?> ],
                ['Offices consumption', <?php echo $ConsoElecBureau3?>, <?php echo $PrixElecBureau3?>],
                ['Production consumption', <?php echo $ConsoProdElec3?>, <?php echo $PrixProdElec3?>]
    
                ]);

        var options = {
          title: 'Company consumption',
          subtitle: 'Consumption in kwh and Price in euros',
          width: 300,
          height: 250,
         };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material3'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
    </script>
    <div id="columnchart_material3" style="width: 400px; height: 250px;"></div>

 
    </div>
 
    <div class="right">
              <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
          <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);
 
          function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Type of consumption', 'Consumption', 'Price',],
              ['Transport consumption', <?php echo $consoPetrolTot1?>,<?php echo $PrixPetrolTot1?> ],
              ]);
 
            var options = {
              title: 'Transport Company consumption',
              subtitle: 'Consumption in Liter and Price in euros',
              width: 300,
              height: 250,  
            };
 
            var chart = new google.charts.Bar(document.getElementById('columnchart_materials1'));
              chart.draw(data, google.charts.Bar.convertOptions(options));
              }
          </script>
          <div id="columnchart_materials1" style="width: 400px; height: 250px;"></div>
          <br>
         <br>
         <br>
          <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Type of consumption', 'Consumption', 'Price',],
          ['Transport consumption', <?php echo $consoPetrolTot2?>,<?php echo $PrixPetrolTot2?> ],
          ]);

        var options = {
          title: 'Transport Company consumption',
          subtitle: 'Consumption in Liter and Price in euros',
          width: 300,
          height: 250,  
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_materials2'));
          chart.draw(data, google.charts.Bar.convertOptions(options));
          }
      </script>
      <div id="columnchart_materials2" style="width: 400px; height: 250px;"></div>

      <br>
         <br>
         
      <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Type of consumption', 'Consumption', 'Price',],
          ['Transport consumption', <?php echo $consoPetrolTot3?>,<?php echo $PrixPetrolTot3?> ],
          ]);

        var options = {
          title: 'Transport Company consumption',
          subtitle: 'Consumption in Liter and Price in euros',
          width: 300,
          height: 250,  
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_materials3'));
          chart.draw(data, google.charts.Bar.convertOptions(options));
          }
      </script>
      <div id="columnchart_materials3" style="width: 400px; height: 250px;"></div>

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
