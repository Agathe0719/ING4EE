
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
    <div class="button">
       <button onclick="window.location.href = 'pothercompanies.php';">See graphs of other companies</button>
   </div>

</nav>



<header>
<div class="header-section">
    <div class="header-section-1">
    <img src="https://cdn.pixabay.com/photo/2022/01/10/15/29/wind-mills-6928590_960_720.jpg" height="50%" width="100%"/>
    <h1> HELLO <?php echo $nomConnexion?>. </h1>
    <h3> We analyzed you data so now you can see our graphs, advices and solutions</h3>

    <div class="button">
                <button onclick="window.location.href = 'modifdataanalyse.php';">Update my data</button>
    </div>

    <div class="button">
                <button onclick="window.location.href = 'psolution.php';">See our advices and solution</button>
    </div>
   
    </div>

    <div class="header-section-2">
    <h2>
        <!-- si l'utilisateur est connecté -->
 <?php 
     //   session_start();
       
     //   if($_SESSION['nomConnexion'] !== "")
    //    {
        //    $nomConnexion = $_SESSION['nomConnexion'];

            //Data for tab
        //    if($_SESSION['consoElecTot'] !== "")
        //   {

            
            $consoElecTot=110000;
            //$PrixElecTot=$_SESSION['PrixElecTot'];
            $ConsoElecBureau=27500;
            //$PrixElecBureau=$_SESSION['PrixElecBureau'];
            $ConsoProdElec=82500;
            //$PrixProdElec=$_SESSION['PrixProdElec'];
           // $consoPetrolTot=$_SESSION['consoPetrolTot'];
            //$PrixPetrolTot=$_SESSION['PrixPetrolTot'];

            //Faire le tableau ici
          //  }

          //  else
          //  {
           //     echo "<script language='javascript' type='text/javascript'> location.href='maconso.php'</script>";
           // }
            
     //   }
      
?>

            <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
        
              google.charts.load('current', {'packages':['corechart']});
        
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
        
                // Create the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Consomation');
                data.addColumn('number', 'kwH');
                data.addRows([
                  ['Offices consumption',  <?php echo $ConsoElecBureau?>],
                  ['Production consumption', <?php echo $ConsoProdElec?>],
              
                  
                ]);
        
                var options = {'title':'Average energy consumption of your different department  on 1 year (in kWh)',
                               'width':500,
                               'height':400};
        
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
              }
            </script>
                <div id="chart_div"></div>  -->

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["conso", "kwh", { role: "style" } ],
        ["Total consumption",  <?php echo $consoElecTot?>, "black"],
        ["Offices consumption",  <?php echo $ConsoElecBureau?>, "silver"],
        ["Production consumption",  <?php echo $ConsoProdElec?>, "gold"],
       
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Different consumption, in kWh",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
           </h2>
    </div>
 n  <br>
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