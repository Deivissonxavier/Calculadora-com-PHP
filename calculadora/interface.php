<?php
include_once("Calculadora.class.php");

$objCalc = new Calculadora();
if($_POST["operacao"]=="Soma"){	
	echo $objCalc->soma($_POST["valor1"],$_POST["valor2"])."<br/>";
}
if($_POST["operacao"]=="Subtraçao"){
	echo $objCalc->subtrair($_POST["valor1"],$_POST["valor2"])."<br/>";
}
if($_POST["operacao"]=="Divisão"){
	echo $objCalc->dividir($_POST["valor1"],$_POST["valor2"])."<br/>";
}
if($_POST["operacao"]=="Multiplicação"){
	echo $objCalc->multiplicar($_POST["valor1"],$_POST["valor2"])."<br/>";
}