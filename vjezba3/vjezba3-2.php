<!DOCTYPE HTML>
<html>
    <head>
        <title>Zadatak</title>
    </head>
    <body>
        <?php
            echo 
            "<p>Kalkulator (switch nareba)</p>
            <form method='POST' action='' id='calc'>
                <label for='fname'>Upiši prvi broj</label>
                <input type='number' name='prvi' id='prvi' required='required' value=''>
                <label for='fname'>Upiši drugi broj</label>
                <input type='number' name='drugi' id='drugi' required='required' value=''>
            <p>Rezultat: ";
            if (isset($_POST['prvi']) && isset($_POST['drugi']) && isset($_POST['operator'])){
                switch($_POST['operator']) {
                    case "+":
                        echo "" . ($_POST['prvi'] + $_POST['drugi']);
                        break;
                    case "-":
                        echo "" . ($_POST['prvi'] - $_POST['drugi']);
                        break;
                    case "*":
                        echo "" . ($_POST['prvi'] * $_POST['drugi']);
                        break;
                    case "/":
                        echo "" . ($_POST['prvi'] / $_POST['drugi']);
                        break;
                }
            }
            echo "</p>";
            echo 
            "<input type='submit' name='operator' value='+'>
            <input type='submit' name='operator' value='-'>
            <input type='submit' name='operator' value='*'>
            <input type='submit' name='operator' value='/'>
            </form>";
        ?>
    </body>
</html>