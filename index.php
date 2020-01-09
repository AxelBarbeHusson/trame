<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>La listes des caises</title>
    <link href="./assets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php
/*function cmp($a,$b,$c,$d,$e,$f,$i,$j){
    return strcmp($a["json"],$b["json"],$c["json"],$d["json"],$e["json"],$f["json"],$i["json"],$j["json"]);
}
$jo[0]["json"] = "Name";
$jo[1]["json"] = "Miles_per_Gallon";
$jo[2]["json"] = "Cylinders";
$jo[3]["json"] = "Displacement";
$jo[4]["json"] = "Horsepower";
$jo[5]["json"] = "Weight_in_lbs";
$jo[6]["json"] = "Acceleration";
$jo[7]["json"] = "Year";
$jo[8]["json"] = "Origin";
usort($jo,"cmp");

*/
$fichier = file_get_contents('./files/cars.json');
$json = json_decode($fichier, true);
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