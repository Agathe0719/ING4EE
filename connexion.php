
<?php
    $con = mysqli_connect("localhost","root","","energy_project");

    if(mysqli_connect_errno()){
        echo "Erreur to connexion : " . mysqli_connect_errno();
    }
?>