<?php


if(!isset($_SESSION["tab5Chif"]) | (isset($_POST["reload"]) && $_POST["reload"]==1)){
    for ($i=0; $i <5 ; $i++) { 
      $_SESSION["tab5Chif"][$i]=random_int(0,10);
      } 
    }
if (isset($_SESSION["tab5Chif"])){
$tab5Chiffres=$_SESSION["tab5Chif"];
$tmpMax=$tab5Chiffres[0];
$tmpMin=$tab5Chiffres[0];
for ($i=1; $i < count ($tab5Chiffres); $i++) { 

    if($tmpMax < $tab5Chiffres[$i])
    {$tmpMax=$tab5Chiffres[$i];}
    
    if($tmpMin > $tab5Chiffres[$i]) 
    {$tmpMin=$tab5Chiffres[$i];}
}
$sommeTab=0;
$moyenne=0;
for ($i=0; $i < 5 ; $i++) { 
    $sommeTab=$sommeTab+$tab5Chiffres[$i];
}
$moyenne=$sommeTab/count($tab5Chiffres);
if(isset($_POST["choix"])){
    if($_POST["choix"]==""){
        $_SESSION["choix"]=null;
    }

    if($_POST["choix"]=="1"){
    $_SESSION["choix"]=$tmpMax;
}
if($_POST["choix"]=="2"){
    $_SESSION["choix"]=$tmpMin;
}
if($_POST["choix"]=="3"){
    $_SESSION["choix"]=$moyenne;
}
if($_POST["choix"]=="4"){
    $_SESSION["choix"]=$sommeTab;
}
}}
?>