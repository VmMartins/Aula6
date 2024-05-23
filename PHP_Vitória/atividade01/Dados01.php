<?php
$nome = $_GET["nome"];
$es = $_GET["estadoCivil"];


 switch($es){
    case 1: 
        $es = "Solteiro(a)";
        break;
    case 2: 
        $es = "Casado(a)";
        break;
    case 3: 
        $es = "Divorciado(a)";
         break;
    case 4: 
        $es = "Viúvo(a)";
        break;
    case 5: 
        $es = "União estável";
        break;  
 }
 echo"\nO estado civil de ".$nome." é ".$es;
?>