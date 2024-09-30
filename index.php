<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcolatrice</title>
</head>
    <body>
        <h1>Calcolatrice</h1>
        <form action="index.php" method="GET">
            <input name="n1" type="number" value="<?php echo $_GET["n1"]?>" required>
            <select name="operatore" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input name="n2" type="number" value="<?php echo $_GET["n2"]?>" required>
            <input type="submit" value="Calcola">
        </form>
    </body>
</html>

<?php
    require "functions.php";

    $risultato = 0;

    if ($_GET["operatore"] =="+"){
        $risultato = somma2N($_GET["n1"], $_GET["n2"]);
    }elseif ($_GET["operatore"] == "-"){
        $risultato = sott2N($_GET["n1"], $_GET["n2"]);
    }elseif ($_GET["operatore"] == "*"){
        $risultato = prod2N($_GET["n1"], $_GET["n2"]);
    }elseif ($_GET["operatore"] == "/"){
        $risultato = div2N($_GET["n1"], $_GET["n2"]);
    }

    echo "Risultato: $risultato"
?>