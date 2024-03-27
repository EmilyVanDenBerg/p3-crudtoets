<?php
// Auteur: Emily van den Berg
// functie: verwijder een kroeg op basis van de id
include 'functions.php';

// Haal bier uit de database
if(isset($_GET['kroegcode'])){

    // test of insert gelukt is
    if(deletebrouw($_GET['kroegcode']) == true){
        echo '<script>alert("Kroeg met kroegcode: ' . $_GET['kroegcode'] . ' is verwijderd.")</script>';
        echo "<script> location.replace('main.php'); </script>";
    } else {
        echo '<script>alert("Kroeg is NIET verwijderd.")</script>';
    }
}
?>
