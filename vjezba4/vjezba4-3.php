<!DOCTYPE HTML>
<html>
    <head>
        <title>Zadatak</title>
    </head>
    <body>
        <?php
            echo 
            "<h1>Zadatak <i>str_word_count</i></h1>
            <form method='POST' action='' id='ulaz'>
                <label for='fname'>Ulazni niz:</label><br>
                <input type='text' name='ulaz' id='ulaz' required='required' value='' autofocus>
                 <input type='submit' name='submit' value='Izračunaj'>
            </form><br>";
            if(isset($_POST['ulaz'])){
                $broj_rijeci = str_word_count($_POST['ulaz']);
                echo "Ulazni niz: '<i>" . $_POST['ulaz'] . "</i>' sadrži " . $broj_rijeci . " riječi.";
            }
        ?>
    </body>
</html>
