<!DOCTYPE HTML>
<html>
    <head>
        <title>Zadatak</title>
    </head>
    <body>
        <?php
            echo 
            "<h1>Ispitivanje da li je uneseni broj prost</h1>
            <form method='POST' action='' id='ulaz'>
                <label for='fname'>Unesite broj za ispitati</label><br>
                <input type='number' name='ulaz' id='ulaz' required='required' value='' autofocus>
                 <input type='submit' name='submit' value='Izračunaj'>
            </form><br>";

            function jeProst($broj){
                if($broj <= 1){
                    return false;
                }
                for($i = 2; $i < $broj; $i++){
                    if($broj % $i == 0) {
                        return false; 
                    }
                }

                return true; 
            }
            if(isset($_POST['ulaz'])){
                $broj = intval($_POST['ulaz']);
                $prost = jeProst($broj) ? 'je' : 'nije';

                echo "Broj <i>" . $broj . "</i> ". $prost . " prost broj.<br>";
            }
            for($i = 1; $i <= 100; $i++){
                if(jeProst($i)){
                    echo $i . " ";
                }
            }
        ?>
    </body>
</html>
