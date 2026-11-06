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
                echo '<li><input type="checkbox" name="car[]" value="' .$car . '"> ' . $car . '</li>'; 
            } 
                
            echo "
            </ul>
            <p><input type='submit' value='pošalji'></p>
            </form>"; 
            if(isset($_POST['car'])){
                foreach(range(0,3) as $index) {
                    if(isset($_POST['car'][$index])) { echo $_POST['car'][$index]. ' '; }
                }
            }

        ?>
    </body>
</html>
