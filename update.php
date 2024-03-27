<?php
// functie: update kroeg
// Auteur: Emily van den Berg

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updatebrouw($_POST) == true){
            echo "<script>alert('Kroeg is gewijzigd.')</script>";
        } else {
            echo '<script>alert("Kroeg is NIET gewijzigd.")</script>';
        }
    }

    // Test of id is meegegeven in de URL
    if(isset($_GET['kroegcode'])){  
        // Haal alle info van de betreffende id $_GET['id']
        $id = $_GET['kroegcode'];
        $row = getbrouw($id);
    
?>

<!DOCtype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig kroeg</title>
</head>
<body>
  <h2>Wijzig kroeg</h2>
  <form method="post">

    <input type="hidden" id="kroegcode" name="kroegcode" required value="<?php echo $row['kroegcode']; ?>"><br>

    <label for="naam">Naam:</label>
    <input type="text" id="naam" name="naam" required value="<?php echo $row['naam']; ?>"><br>

    <label for="land">Adres:</label>
    <input type="text" id="adres" name="adres" required value="<?php echo $row['adres']; ?>"><br>

    <label for="land">Plaats:</label>
    <input type="text" id="plaats" name="plaats" required value="<?php echo $row['plaats']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='main.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen id opgegeven.<br>";
    }
?>