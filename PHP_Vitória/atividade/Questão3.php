<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
        <h1>Sistema para cacular reajustre salarial!<h1>
                <h3>Insira seus dados:<h3><br><br>
                        Nome: <input type="text" name = "Nome"><br><br>
                        Tempo de serviço: <input type="number" name = "Num"><br><br>
                        <input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>
<?php
/*3 - Uma empresa decide dar um aumento aos seus funcionários de acordo comuma tabela
que considera o salario atual e o tempo de serviço de cada funcionário.
Os funcionários com menor salario terão um aumento proporcionalmente maior do
que os funcionários  com um salario maior, e conforme o tempo de serviço na empresa,
cada funcionário irá receber um bônus adicional de salário. Faça um programa que leia:

• o valor do salario atual do funcionário; 

• o tempo de serviço desse funcionário na empresa (número de anos de trabalho na empresa).

Use as tabelas abaixo para calcular o salario reajustado deste funcionário e imprima o 
valor do salario final reajustado, ou uma mensagem caso o funcionário não tenha direito
 a nenhum aumento.

TABELA:

até 500               25             abaixo de 1 ano      sem bônus
até 1000              20             de 1 a 3 anos         100
até 1500              15             4 a 6 anos            200
até 2000              10             7 a 10 anos           300
acima de 2000   sem resajustre       mais de 10 anos       500        
*/
 $nome = $_GET["Nome"];
 $t = $_GET["Num"];

 if($t<= 500){
    $t*0.25
 }


?>