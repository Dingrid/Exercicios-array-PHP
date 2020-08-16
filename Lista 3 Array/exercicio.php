<?php
echo"<link rel='stylesheet' type='text/css' href='estilo.css'>";
echo"<p>LISTA DE EXERCÍCIOS 1"."<BR/>";
echo"Ingrid de Assis Souza 08/06/2018 2IIA.<br/></p>";

/******
Exercício 1
Escreva uma função que receba 2 arrays (1 de notas, 1 de pesos) e mostre a média. 
Para array(7, 8, 10) e array(2, 3, 5) o resultado deve ser 8.8.
*******/
echo"<form id='resp'>
<fieldset ='Ex1'>
<legend> Exercício 1 </legend>";


function media($notas, $pesos) //Cria uma função e instancia as variáveis entre parênteses
{
	$i=0;
	$x=0;
	$resp=0;
	$somap=0;
	while($i!=sizeof($pesos))
	{
		$somap+= $pesos[$i];
		$i++;
	}
	for($x=0; $x<sizeof($notas);$x++) //Enquanto o contador $x n percorrer todo o array o laço não para
	{
		$resp+= ($notas[$x] /$somap)* $pesos[$x]; //calcula a média deles e soma tudo no resultado
	}

	return $resp;
}
echo media(array(7,8,10), array(2,3,5)); //Chama a função mediadeArray e envia como parâmetros o array peso e o array nota

echo"</fieldset>
					
<fieldset id='Ex2'>
<legend>Exercício 2</legend>";

/**********
Exercício 2
Escreva uma função que retorne o array passado como parâmetro, de trás para frente.
******/


function inverte($array) {
	$nv= implode("-", $array); //Converte o array para String
	
	$nv= strrev($nv); //Inverte a string
	$array= explode("-", $nv); //Converte a string para array
	
	return $array; //Mostra o Array
	
}
print_r(inverte(array("a","b","c","d")));

echo"</fieldset>
					
<fieldset id='Ex3'>
<legend>Exercício 3</legend>";
/*
Exercício 3
Escreva uma função que retorne o tamanho do array, sem utilizar as funções sizeof ou count.
*/

function tamanho($ar) {
	$ar= implode("-", $ar); //Converte o array para String
	
	$tam= strlen($ar)-2; //2 espaços 
	
	return $tam; //Mostra o Array
}
echo tamanho(array(1,2,3));



/*************
Exercício 4
Construa uma versão própria da função array_push sem utilizar a função em seu código.
************/
echo"</fieldset>
					
<fieldset id='Ex4'>
<legend>Exercício 4</legend>";


function fila($array) {
	$z=sizeof($array);
	$y=4;

		print_r ($array);
		echo("[". $z ."] => " .$y);
	
}
$x= array(1,2,3);
fila($x);



/**************
Exercício 5
Construa uma versão própria da função array_pop sem utilizar a função em seu código.
***************/
echo"</fieldset>
					
<fieldset id='Ex5'>
<legend>Exercício 5</legend>";


function pilha($array)
{
	$z=sizeof($array);
	unset ($array[$z-1]);

		print_r ($array);
}
$x= array(1,2,3,4);
pilha($x);



/***************
Exercício 6
Construa uma versão própria da função array_shift sem utilizar a função em seu código.
*************/
echo"</fieldset>
					
<fieldset id='Ex6'>
<legend>Exercício 6</legend>";


function meu_array_shift($array)
{
	$z= $array[sizeof($array) -1];
	unset($array[sizeof($array) -1]);
		print_r ($array);
}

$x= array(1,2,3);
meu_array_shift($x);

	
/************
Exercício 7
Construa uma versão própria da função array_unshift sem utilizar a função em seu código.
*************/
echo"</fieldset>
					
<fieldset id='Ex7'>
<legend>Exercício 7</legend>";


function unshift($array,$z) {
	
	for($x=sizeof($array); $x>0; $x--)
	{
		$array[$x] = $array[$x-1];
	}
	
	$array[0]=$z;
	print_r($array);
}
$x= array(1,2,3);
unshift($x,4);



/********
Exercício 8
Construa uma versão própria da função array_key_exists sem utilizar a função em seu código.
*********/
echo"</fieldset>
					
<fieldset id='Ex8'>
<legend>Exercício 8</legend>";


function keye($c, $array)
{
	$r=0;
	
	for($z=0;$z!=sizeof($array); $z++)
	{
		if($array[$z]== $c)
		{
			echo"Existe uma posição para ". $c ."<br/>";
			$r=1;
		}
	}
	if($r!=1)	
		{
			echo"Não existe uma posição para ". $c ."<br/>";
		}
	
}
$x= array("Componente","DSI","Professor","Roberto");
echo keye("DSI", $x);
echo keye("Batata", $x);
echo keye("Roberto", $x);
echo"</fieldset>";
?>