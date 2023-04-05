<?php
require_once("auto.php");

$automobili = [
    new Auto("Kadet", 1993, "Opel"),
    new Auto("Clio", 2001, "Renault"),
    new Auto("X5", 2020, "BMW"),
    new Auto("Fabia", 2001, "Skoda"),
    new Auto("Punto", 2015, "Fiat"),
    new Auto("Golf 5", 2011, "Volkswagen"),
    new Auto("Golf 7", 2018, "Volkswagen")

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <tr colspan = 2>
        <td><h1>I KOLOKVIJUM</h1></td>
    </tr>
    
    <tr>
        <td><a href = "prikaz.php">PRIKAZ</a></td>
        <td><a href = "index.php">GLAVNA</a></td>
    </tr>

    <table border = 2px>
        <tr>
            <th>Marka</th>
            <th>Godiste</th>
            <th>Proizvodjac</th>
        </tr>
        <?php
        foreach($automobili as $a)
        { ?>
        <tr>
            <td> <?php echo $a->get_marka(); ?> </td>
            <td> <?php echo $a->get_godiste(); ?> </td>
            <td> <?php echo $a->get_proizvodjac(); ?> </td>
        </tr>
        <?php } ?>
    </table>

    <table border="1px">
        <tr>
            <th>RB</th>
            <th>IME</th>
            <th>PREZIME</th>
        </tr>
        <?php
        for($i=0; $i<10; $i++){ ?>
        <tr>
            <td> <?php echo $i+1 ?> </td>
            <td> <?php echo "Djordje" ?> </td>
            <td> <?php echo "Jovanovic" ?> </td>
        </tr>           
        <?php }
        ?>
    </table>

    <td><h1>Dj Jo 48/2019</h1></td>
</table>

</body>
</html>