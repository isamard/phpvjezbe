<!DOCTYPE HTML>
<html>
    <head>
        <title>Zadatak</title>
    </head>
    <body>
        <?php
            echo "<p>Označi vozilo:</p>"; 
            $cars = array("Audi", "BMW", "Renault", "Citroen"); 
            echo "<form method='POST' action='' id='cars'>
            <ul>";
            foreach ($cars as $car) { 
                echo '<li><input type="radio" name="car" value="' .$car . '" required> ' . $car . '</li>'; 
            } 
                
            echo "
            </ul>
            <p><input type='submit' value='pošalji'></p>
            </form>"; 
            if(isset($_POST['car'])) { echo $_POST['car']; }
        ?>
    </body>
</html>
