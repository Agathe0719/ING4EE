<!-- ca ca sert pas c est pour ecrire sur le html 
<html>
<body>

Name of the new company <?php echo $_POST["namecompany"]; ?><br>
Name of the registration : <?php echo $_POST["nameid"]; ?><br>
His role : <?php echo $_POST["role"]; ?><br>
His email address is: <?php echo $_POST["newemail"]; ?><br>
His phone number : <?php echo $_POST["phone"]; ?><br>

Project and expectation : <?php echo $_POST["project"]; ?><br>

</body>
</html>-->


<?php
// permet d'enregistrer valeurs dans le code
    if(isset($_POST['submitInscription'])){
        include("connexion.php");
        session_start();

        $namecompany = $_POST['namecompany'];
        // $nameid = $_POST['nameid'];
        $role = $_POST['role'];
        $newemail = $_POST['newemail'];
        $phone = $_POST['phone'];

        mysqli_query($con,"INSERT INTO user (Company_Name,Password,Email,Phone) 
            VALUES ('$namecompany','$role','$newemail','$phone')");

echo "<script language='javascript' type='text/javascript'> location.href='plogin2.php'</script>";
    }
?>