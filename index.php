<?php
$fichier = file_get_contents('exemple.json');

$json = json_decode($fichier, true);
echo "<pre>";
print_r($json);
echo "</pre>";