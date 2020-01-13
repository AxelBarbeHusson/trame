<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>La listes des caises</title>
    <link href="./assets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php

$fichier = file_get_contents('./files/cars.json');
$json = json_decode($fichier, true);
$ordered = 'Name';
if (!empty($_GET['ordered'] && $_GET['michel'])){
    $ordered = $_GET['ordered'];
    $michel = $_GET['michel'];
}
/*function cmp($a,$b){
    return strcmp($a["Name"],$b["Name"]);
};*/
usort($json, function ($a, $b) use ($ordered, $michel) {
    if ($michel == 'croissant') {
        if ($a[$ordered] < $b[$ordered]) {
            return 1;
        } else if ($a[$ordered] > $b[$ordered]) {
            return -1;
        } else {
            return 0;
        }
    } else {
        if ($a[$ordered] < $b[$ordered]) {
            return -1;
        } else if ($a[$ordered] > $b[$ordered]) {
            return 1;
        } else {
            return 0;
        }
    }

    // return(strcmp($a[$ordered], $b[$ordered]));
})
?>
<form action="" method="get">
    <select name="ordered">
        <option value="Name">Name</option>
        <option value="Miles_per_Gallon">Miles_per_Gallon</option>
        <option value="Cylinders">Cylinders</option>
        <option value="Displacement">Displacement</option>
        <option value="Horsepower">Horsepower</option>
        <option value="Weight_in_lbs">Weight_in_lbs</option>
        <option value="Acceleration">Acceleration</option>
        <option value="Year">Year</option>
        <option value="Origin">Origin</option>
    </select>
    <select name="michel">
        <option name="croissant">croissant</option>
        <option name="descroissant">descroissant</option>
    </select>
    <input type="submit" name="submitted" value="go">
</form>


<?php
$tableau = "<table>";
$tableau .= "<caption>Liste des caisses à Greugreu</caption>";
$tableau .= "<thead>";
$tableau .= "<tr>";
if (count($json) > 0) {
    $tableValuesN0 = $json[0];
    $titles = array_keys($tableValuesN0);
    if (count($titles) > 0) {
        for($i = 0 ; $i < count($titles) ; $i++) {
            $tableau .= "<td>";
            $tableau .= $titles[$i];
            $tableau .= "</td>";
        }
    }
}
$tableau .= "</tr>";
$tableau .= "</thead>";
$tableau .= "<tbody>";
foreach ($json as $value) {

    $tableau .= "<tr>";
    foreach ($value as $valeurs) {
        $tableau .= "<td>";
        $tableau .= $valeurs;

        $tableau .= "</td>";
    }
    $tableau .= "</tr>";
}
$tableau .= "</tbody>";
$tableau .= "</table>";
echo $tableau;
?>
</body>
</html>