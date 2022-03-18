
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=""width=device=width, initial-scale="1.0">
	<title>Solutions</title>
<link rel="stylesheet" href="psolution.css">
<style>
    .flex-container {
      display: flex;
    }
    
    .flex-container > div {
      background-color: #000000;
      margin: 30px;
      margin-top: 100px;
      margin-bottom: 100px;
      padding: 30px;
      border-radius: 25px;
      font-size: 40px;
      flex-wrap: wrap;
      
     
    }
    </style>
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
        <a style="color: beige;"> ACA advices and solutions for  <?php echo $nomConnexion?> </a>
      
    </div>
    <div class="boutons">
    <button onclick="window.location.href = 'pothercompanies.php';">See graphs of other companies</button>
    </div>
    <div class="button">
        <button class="ceci est un bouton"> Log out </button>
    </div>
    
</nav>

<header>
        <div class="flex-container">
            <div onclick="window.location.href = 'psolution1.php';">Solution 1: Earn Money</div>
            <div onclick="window.location.href = 'psolution2.php';">Solution 2: Environment first</div>
            <div onclick="window.location.href = 'psolution3.php';">Solution 3: Both</div> 
            <input type="submit" value="" name="choice"> 
          </div>

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