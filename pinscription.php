<!DOCTYPE html>
<html lang="en">

<?php
// permet d'enregistrer valeurs dans le code
$sql = "SELECT Company_Name,Password,Email,Phone from user";
    if(isset($_POST['submitInscription'])){
        include("connexion.php");
        session_start();

        $namecompany = $_POST['namecompany'];
        $role = $_POST['role'];
        $newemail = $_POST['newemail'];
        $phone = $_POST['phone'];

        //Verifier que le nom est pas deja utilisé
        $select = mysqli_query($con, "SELECT * FROM user WHERE Company_Name = '".$namecompany."'");
        if(mysqli_num_rows($select)) {
            $sql = "SELECT Company_Name,Password,Email,Phone from user";
            if (mysqli_query($con, $sql)) {
              echo "The name of company is already used";
              $sql = "SELECT Company_Name,Password,Email,Phone from user";
        } else {
              echo "Erreur : " . $sql . "<br>" . mysqli_error($con);
        }
    }
    else{
        mysqli_query($con,"INSERT INTO user (Company_Name,Password,Email,Phone) 
          VALUES ('$namecompany','$role','$newemail','$phone')");
          echo "<script> location.href='plogin.php'</script>";
    }

    }
?>

