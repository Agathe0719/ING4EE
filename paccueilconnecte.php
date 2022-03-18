
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

<section class="page">

<nav>
    <div class="onglets">
    <a style="color: beige;"> coucou <?php echo $nomConnexion?> </a>
    </div>
    <div class="button">
        <button class="ceci est un bouton"> Log out </button>
    </div>

</nav>

<!-- tester si l'utilisateur est connecté -->
 <!-- <?php 
                // session_start();
                // if($_SESSION['nomConnexion'] !== ""){
                    // $nomConnexion = $_SESSION['nomConnexion'];
                    // afficher un message
                    //  echo "Bonjour $nomConnexion, vous êtes connecté";
                //  }
            // ?>-->


<header>
<div class="header-section">
    <div class="header-section-1">
    <img src="https://cdn.pixabay.com/photo/2022/01/10/15/29/wind-mills-6928590_960_720.jpg" height="50%" width="100%"/>
    <h1> HELLO <?php echo $nomConnexion?>. </h1>
    <h3> We analyzed you data so now you can see our graphs, advices and solutions</h3>

    <div class="boutons">
        <a href="maconso.php">
            <input type="button" value ="Update my data">
                </a>
       

    </div>

    <div class="boutons">
        <button class="ceci est un bouton"> See our advices & solution </button>
    </div>
   
    </div>

    <div class="header-section-2">
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
                               'width':500,
                               'height':400};
        
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