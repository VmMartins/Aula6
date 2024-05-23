<?php
$num = $_GET["num"];


switch($num){
    case 1:
        echo "\nA opção correspondente é Domingo.";
        break;
    case 2:
        echo "\nA opção correspondente é Segunda-feira.";
        break;
    case 3:
        echo "\nA opção correspondente é Terça-feira.";
        break;
    case 4:
        echo "\nA opção correspondente é Quarta-feira.";
        break;
    case 5:
        echo "\nA opção correspondente é Quinta-feira.";
        break;
    case 6:
        echo "\nA opção correspondente é Sexta-feira.";
        break;
    case 7:
        echo "\nA opção correspondente é Sábado.";
        break;
    default:
        echo "\nOpção inválida!";
}


?>