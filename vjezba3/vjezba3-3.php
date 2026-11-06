<!DOCTYPE HTML>
<html>
    <head>
        <title>Zadatak</title>
    </head>
    <body>
        <?php
            echo 
            "<h1>Izračun ocjene</h1>
            <form method='POST' action='' id='ocjena'>
                <label for='fname'>Ocjena iz prvog kolokvija</label>
                <input type='number' name='prvi' id='prvi' required='required' value=''><br>
                <label for='fname'>Ocjena iz drugog kolokvija</label>
                <input type='number' name='drugi' id='drugi' required='required' value=''><br>";
            if (isset($_POST['prvi']) && isset($_POST['drugi']) && isset($_POST['submit'])){
                if($_POST['prvi'] == 1)
                    echo "<p>Ocjena iz 1. kolokvija je negativna.</p>";
                else if($_POST['drugi'] == 1)
                    echo "<p>Ocjena iz 2. kolokvija je negativna.</p>";
                else if($_POST['prvi'] > 5 || $_POST['prvi'] < 1 || $_POST['drugi'] > 5 || $_POST['drugi'] < 1)
                    echo "<p>Nevažeća ocjena unesena. Ocjene ne smiju biti veće od 5 ili manje od 1.</p>";
                else
                    {
                        echo "<p>Prosjek: " . (($_POST['prvi']+$_POST['drugi'])/2) . "</p>";
                        echo "<p>Konačna ocjena: " . round(($_POST['prvi']+$_POST['drugi'])/2) . "</p>";
                    }
            }
            echo 
            "<input type='submit' name='submit' value='Izračunaj'>
            </form>";
        ?>
    </body>
</html>