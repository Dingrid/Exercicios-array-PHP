<html>
<head>
<title>Exercícios Array</title>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
</head>
<body>

<h3>Feito por: INGRID DE ASSIS SOUZA</h3>

<form method="get" action="exercicio4.php">

<fieldset id="Ex1">
<legend> Exercício 1 </legend>

<?php
	$gxp=0;
	while($gxp<=8)
	{
		echo"<p><label for='cA'></label> <input type='number' name='Np$gxp' id='cA'  size='20' maxlength='100' placeholder=' Digite um número' /></p> ";
		$gxp++;
	}
	
?>
</fieldset>
<fieldset id="Ex2">
<legend> Exercício 2 </legend>

<?php
	$gxp=0;
	echo("Preço unitário de cada produto: <br/>");
	while($gxp<=9)
	{
		echo("<br/>Produto $gxp :<br/>");
		echo"<p><label for='cA'></label> <input type='number' name='Pr$gxp' id='cA'  size='20' maxlength='100' placeholder=' Preço unitário' /></p> ";
		echo"<p><label for='cA'></label> <input type='number' name='Qv$gxp' id='cA'  size='20' maxlength='100' placeholder=' Quantidade vendida' /></p> ";
		$gxp++;
	}

?>
</fieldset>
<fieldset id="Ex3">
<legend> Exercício 3 </legend>

<?php
$gyp=0;
echo("Array 1:<br/>");
	while($gyp<=9)
	{
		echo"<p><label for='cA'></label> <input type='number' name='N3$gyp' id='cA'  size='20' maxlength='100' placeholder=' Digite um número' /></p> ";
		$gyp++;
	}
	$gxp=0;
	echo("Array 2:<br/>");
	while($gxp<=9)
	{
		echo"<p><label for='cA'></label> <input type='number' name='N31$gxp' id='cA'  size='20' maxlength='100' placeholder=' Digite um número' /></p> ";
		$gxp++;
	}
	
?>
</fieldset>

<fieldset id="Ex4">
<legend> Exercício 4 </legend>

<?php
	$gxp=0;
	while($gxp<=7)
	{
		echo"<p><label for='cA'></label> <input type='number' name='tA$gxp' id='cA'  size='20' maxlength='100' placeholder=' Digite um número' /></p> ";
		$gxp++;
	}
	
?>
</fieldset>

<fieldset id="Ex5">
<legend> Exercício 5 </legend>

<?php
$gyp=0;
echo("Array 1:<br/>");
	while($gyp<=9)
	{
		echo"<p><label for='cA'></label> <input type='number' name='tA5$gyp' id='cA'  size='20' maxlength='100' placeholder=' Digite um número' /></p> ";
		$gyp++;
	}
	$gxp=0;
	echo("Array 2:<br/>");
	while($gxp<=9)
	{
		echo"<p><label for='cA'></label> <input type='number' name='tA51$gxp' id='cA'  size='20' maxlength='100' placeholder=' Digite um número' /></p> ";
		$gxp++;
	}
	
?>
</fieldset>
<fieldset id="Ex6">
<legend> Exercício 6 </legend>

<?php
$gyp=0;
	while($gyp<10)
	{
		echo"<p><label for='cA'></label> <input type='number' name='Ar$gyp' id='cA'  size='20' maxlength='100' placeholder=' Digite um número' /></p> ";
		$gyp++;
	}
?>
</fieldset>
<fieldset id="Ex7">
<legend> Exercício 7 </legend>

<?php
	$gxp=0;
	while($gxp<=7)
	{
		echo"<p><label for='cA'></label> <input type='number' name='tA7$gxp' id='cA'  size='20' maxlength='100' placeholder=' Digite um número' /></p> ";
		$gxp++;
	}
	
?>
</fieldset>
<fieldset id="Ex8">
<legend> Exercício 8 </legend>

<?php
	$gxp=0;
	echo("Array 1:<br/>");
	while($gxp<5)
	{
		echo"<p><label for='cA'></label> <input type='number' name='ble$gxp' id='cA'  size='20' maxlength='100' placeholder=' Digite um número' /></p> ";
		$gxp++;
	}
	echo("Array 2:<br/>");
	$gp=0;
	while($gp<5)
	{
		echo"<p><label for='cA'></label> <input type='number' name='bl$gxp' id='cA'  size='20' maxlength='100' placeholder=' Digite um número' /></p> ";
		$gp++;
	}
?>
</fieldset>
<fieldset id="Ex10">
<legend> Exercício 10 </legend>

<?php
	$gxp=0;
	$al=0;
	echo("<br/> GABARITO<br/>");
	while($gxp<=7)
	{
		echo"<p><label for='cA'></label> <input type='text' name='Ga$gxp' id='cA'  size='20' maxlength='100' placeholder=' $gxp º resposta' /></p> ";
		$gxp++;
	}
	$gxp=0;
	
	while($al<=10)
	{
	echo("<br/> $al º Aluno<br/>");
	while($gxp<=7)
	{
		echo"<p><label for='cA'></label> <input type='text' name='Rp$gxp$al' id='cA'  size='20' maxlength='100' placeholder=' $gxp º resposta' /></p> ";
		$gxp++;
	}
	$gxp=0;
	$al++;
	}
?>
</fieldset>
<fieldset id="Ex11">
<legend> Exercício 11 </legend>

<?php
	$gxp=1;
	while($gxp<=12)
	{
		echo("<br/> $gxp º mês<br/>");
		echo"<p><label for='cA'></label> <input type='number' name='Tm$gxp' id='cA'  size='20' maxlength='100' placeholder=' Digite a temperatura média' /></p> ";
		$gxp++;
	}
	
?>
</fieldset>

<input type="submit" name="tEnviar" value="Enviar" />	
<input type="reset" name="tReset" value="Apagar" />	
</form>
</body>
</html>
