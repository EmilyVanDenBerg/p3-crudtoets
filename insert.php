<?php
    // functie: formulier en database insert kroeg
    // Auteur: Emily van den Berg

    echo "<h1>Insert kroeg</h1>";

    require_once('functions.php');
	 
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertbrouw($_POST) == true){
            echo "<script>alert('Kroeg is toegevoegd.')</script>";
        } else {
            echo '<script>alert("Kroeg is NIET toegevoegd.")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">

        <input type="hidden" id="kroegcode" name="kroegcode"><br>

        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required><br>

        <label for="land">Adres:</label>
        <input type="text" id="adres" name="adres" required><br>

        <label for="land">Plaats:</label>
        <input type="text" id="plaats" name="plaats" required><br>

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='main.php'>Home</a>
    </body>
</html>
