<!DOCTYPE HTML>
<html>
    <head>
        <title>Zadatak</title>
    </head>
    <body>
        <?php
            echo 
            "<p>Igra (pogodi broj)</p>
            <form method='POST' action='' id='broj'>
                <label for='fname'>Upiši jedan broj od 1 do 9</label>
                <input type='number' name='broj' id='broj' required='required' value='' autofocus>
            </form>";
            $random = rand(1,9);
            if(isset($_POST['broj']))
                {
                    if($_POST['broj'] != $random) 
                        echo "Krivo, probaj ponovo!\n";
                    else
                        echo "Pogodak, probaj ponovo!\n";
                    echo "Zamišljeni broj je {$random}";
                }
        ?>
    </body>
</html>