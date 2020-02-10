<?PHP


$computter1 = 'Hoe veel vrienden zal ik vragen?'.PHP_EOL;
$computter2 = 'Wat is jouw naam?'.PHP_EOL;
$computter3 = 'Wat is jouw droom?'.PHP_EOL;
$computter4 = ' heeft dit als droom: ';
$droom = array();

print ($computter1);
$nr = readline("");


if (is_numeric($nr)){
    for($i = 0; $i < $nr; $i++){

        echo $computter2;
        $n = readline("");

        echo $computter3;
        $d = readline("");

        $droom[$n] = $d;
    }
    foreach ($droom as $n => $d){ 
        echo $n, $computter4, $d.PHP_EOL;
    }
}

else if (!is_numeric($nr)){
    echo '"'. $nr. '"'. 'is geen getal, probeer het opnieuw';
    exit;
}

?>