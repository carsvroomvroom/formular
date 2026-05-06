<!DOCTYPE html>
<head>
    <title>Kvíz</title>
</head>
<body>


<?php

$body = 0;

if (!empty($_GET)) {

    if (isset($_GET["otazka1"]) && $_GET["otazka1"] == "Ne") {
        $body++;
    }

    if (isset($_GET["otazka2"]) && $_GET["otazka2"] == "Ano") {
        $body++;
    }

    if (isset($_GET["otazka3"]) && $_GET["otazka3"] == "Ano") {
        $body++;
    }

    if ($body == 3) {
        $vysledek = "Máš 3 body ze 3, jsi génius!";
        echo "<img src='yes.png'>";
    } elseif ($body == 2) {
        $vysledek = "Máš 2 body ze 3, ještě nejsi úplné zklamání."; 
        echo "<img src='ok.png'>";
    } else {
        $vysledek = "Tohle se ti moc nepovedlo, zkus to znovu :(";
        echo "<img src='sad.png'>";
    }
}

?>


<form>
    <label>Je Vltava delší než Labe?</label>
    <input type="text" name="otazka1">


    <br>


    <label>Vzniklo Československo 28.10.1918?</label>
    <input type="text" name="otazka2">


    <br>


    <label>Je nebe modré?</label>
    <input type="text" name="otazka3">


    <br>

    <button>Odeslat</button>
</form>

<?php
if (!empty($_GET)) {
    echo ($vysledek) ;
}
?>


</body>
</html>
