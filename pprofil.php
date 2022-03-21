<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['nomConnexion'] !== "")
                {
                $nomConnexion = $_SESSION['nomConnexion'];
                // afficher un message
                echo "Bonjour $nomConnexion, vous êtes connecté";
                
                
                include("connexion.php");
                session_start();

                $namecompany = $_POST['namecompany'];
                $role = $_POST['role'];
                $newemail = $_POST['newemail'];
                $phone = $_POST['phone'];

                mysqli_query($con,"INSERT INTO user (Company_Name,Password,Email,Phone) 
                VALUES ('$namecompany','$role','$newemail','$phone')");
   
                }
            ?>
    


        </div>
    </body>
</html>