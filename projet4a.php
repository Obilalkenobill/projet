<?php

$tabTemp=array(20,20,20,20,24,19,18,17,16,17,17,18,17,17,14,15,16,16,16,17,17,19,17,20,19,20,21,21,24,17);
$_SESSION["tabTemp"]=$tabTemp;



$tmpMax=$tabTemp[0];
$tmpMin=$tabTemp[0];
for ($i=1; $i < count ($tabTemp); $i++) { 

    if($tmpMax < $tabTemp[$i])
    {$tmpMax=$tabTemp[$i];}
    
    if($tmpMin > $tabTemp[$i]) 
    {$tmpMin=$tabTemp[$i];}
}
$sommeTab=0;
$moyenne=0;
for ($i=0; $i <= count($tabTemp) ; $i++) { 
    $sommeTab=$sommeTab+$tabTemp[$i];
}
$moyenne=$sommeTab/(count($tabTemp));
$_SESSION["tmpMax"]=$tmpMax;
$_SESSION["tmpMin"]=$tmpMin;
$_SESSION["tmpMoy"]=$moyenne;

/*
for ($i=0; $i < count ($tabTemp)-1 ; $i++) { 
    echo "Jour ".($i+1)." du mois de septembre 2017, il a fait : ".$tabTemp[$i+1]." degrés. <br>";
}
echo "<br><br>";
$moyenne=0;
$sommeTabTemp=0;
for ($i=0; $i < count($tabTemp) ; $i++) { 
    $sommeTabTemp=$sommeTabTemp+$tabTemp[$i];
}
$moyenne=$sommeTabTemp/count($tabTemp);
echo "La moyennne des températures en septembre était de : ".$moyenne;*/