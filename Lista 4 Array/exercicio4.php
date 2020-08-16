<html>
<head>
<title> Resultados </title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<form id="resp">
<fieldset ="Ex1">
<legend> Exercício 1 </legend>
<?php
//EXERCÍCIO 1
$array= array();
for($i=0;$i<=8;$i++)
{
	$array[$i] =isset ($_GET["Np$i"])?$_GET["Np$i"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
				
}
for($i=0;$i<=8;$i++)
{
	$c=0;
	$x= $array[$i];
		for($j=1;$j<=$x;$j++)
		{
			$h= $x % $j;
			if($h==0)
			{
				$c++;
			}
		}
if($c<3)
{
	echo($x." é primo e está na posição ".$i."<br/>");
}
}
?>
</fieldset>
	
<fieldset id="Ex2">
<legend>Exercício 2</legend>
<?php
//EXERCÍCIO 2
for($i=0;$i<=9;$i++)
{
	$pr[$i] =isset ($_GET["Pr$i"])?$_GET["Pr$i"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
				
}
for($i=0;$i<=9;$i++)
{
	$qv[$i] =isset ($_GET["Qv$i"])?$_GET["Qv$i"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
				
}
$a=0;
$in=0;
$tv=0;
echo"<table>
<tr>
<th>Objeto</th>
<th>Preço unitário</th>
<th>Quantidade vendida</th>
</tr>
";
for($i=0;$i<=9;$i++)
{
	$tv+=$pr[$i] * $qv[$i];
//LINHAS DA TABELA

echo"<tr>
<td>$i</td> 
<td>R$ $pr[$i] </td>
<td>$qv[$i]</td>
</tr> ";
if($a<$qv[$i])
{
	$a= $qv[$i];
	$in= $i; //armazena o índice
}

}
echo"</table>";
$c= (5*$tv)/100;
echo"<br/>O valor geral das vendas é R$ $tv, a comissão que será paga ao vendedor é R$ $c e o objeto mais vendido é $in º e está na posição $in<br/>";
?>
</fieldset>						
<fieldset id="Ex3">
<legend>Exercício 3</legend>
<?php

//EXERCÍCIO 3
for($ix=0;$ix<=9;$ix++)
{
	$x[$ix] =isset ($_GET["N3$ix"])?$_GET["N3$ix"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
				
}
for($iy=0;$iy<=9;$iy++)
{
	$y[$iy] =isset ($_GET["N31$iy"])?$_GET["N31$iy"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
				
}

$ix=0; //I é o índice do vetor X
$iy=0; //È o índice do vetor Y
$iz=0;
$c=20;

//INTERCALAÇÃO
while($iz!=$c)
{
		$z[$iz]=$x[$ix]; //O valor de iz receberá o valor de x na mesma posição
		$iz++;
		$ix++;
		$z[$iz]=$y[$iy]; //iz receberá o valor de iy
		$iy++;
		$iz++;
}
print_r($z);

?>
					</fieldset>
					
<fieldset id="Ex4">
<legend>Exercício 4</legend>
<?php
//EXERCÍCIO 4
for($i=0;$i<=7;$i++)
{
	$v[$i] =isset ($_GET["tA$i"])?$_GET["tA$i"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
				
}
$ip=0;
$in=0;

for($i=0;$i<=7;$i++)
{
		if($v[$i]>=0)
		{
			$p[$ip]= $v[$i];
			$ip++;
		}
		elseif(($v[$i])<0)
		{
			$n[$in]= $v[$i];
			$in++;
		}
	}
	
echo("Positivos:");
print_r($p);
echo("<br/>Negativos:");
print_r($n);
?>
					</fieldset>
<fieldset id="Ex5">
<legend>Exercício 5</legend>
<?php					
//EXERCÍCIO 5
for($ix=0;$ix<=9;$ix++)
{
	$x[$ix] =isset ($_GET["tA5$ix"])?$_GET["tA5$ix"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
				
}
for($iy=0;$iy<=9;$iy++)
{
	$y[$iy] =isset ($_GET["tA51$iy"])?$_GET["tA51$iy"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
				
}
$iz=0;
	for($iy=0;$iy<=9;$iy++)
		{
		for($ix=0;$ix<=9;$ix++)
		{
			$c=0;
			if (($x[$ix])==($y[$iy]))
			{
				$c++;
			}
		}
		if($c==0)
		{
			$z[$iz]= $y[$iy];
			$iz++;
		}
		}
		
for($ix=0;$ix<=9;$ix++)
		{
		for($iy=0;$iy<=9;$iy++)
		{
			$c=0;
			if ($x[$ix]==$y[$iy])
			{
				$c++;
			}
		}
		if($c==0)
		{
			$z[$iz]= $x[$ix];
			$iz++;
		}
		}
print_r($z);
?>			

					</fieldset>		
<fieldset id="Ex6">
<legend>Exercício 6</legend>
<?php
//EXERCÍCIO 6
for($i=0;$i<=9;$i++)
{
	$pont[$i] =isset ($_GET["Ar$i"])?$_GET["Ar$i"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
				
}
//DECRESCENTE
 $i=0; //limpa o valor da variável
 $j=0; //limpa o valor da variável
 for($i=9;$i >=0; $i--){ 
 for($j=9; $j>=0; $j--){  
    if(($pont[$i]) < ($pont[$j])){  //faz a comparaçao do ponteiro com valor i e com valor j
      //se i<j então ocorre a inversão dos valores do vetor
       $aux = ($pont[$i]); //o auxiliar recebe o valor de i para que esse valor não seja perdido (agr aux valerá i)
       $pont[$i] = $pont[$j]; //i recebe j
       $pont[$j] = $aux; //j receberá o valor do aux, que neste caso vale i
     						} //fecha o if 
  					} //fecha o for
 					} //fecha o for
print_r($pont);
?>
					</fieldset>
					
<fieldset id="Ex7">
<legend>Exercício 7</legend>
<?php
//EXERCÍCIO 7
for($i=0;$i<=7;$i++)
{
	$x[$i] =isset ($_GET["tA7$i"])?$_GET["tA7$i"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
				
}
 for($i=0;$i <=7; $i++){ 
 for($j=0; $j<=7; $j++){  //j se inicia em 0
 
    if($x[$i] < $x[$j]){ //faz a comparaçao do ponteiro com valor i e com valor j
      //se i<j então ocorre a inversão dos valores do vetor
       $aux = $x[$i]; //o auxiliar recebe o valor de i para que esse valor não seja perdido (agr aux valerá i)
       $x[$i] = $x[$j]; //i recebe j
       $x[$j] = $aux; //j receberá o valor do aux, que neste caso vale i
    						 }  //fecha o if 
 }}

print_r($x);
?>
					</fieldset>
					
<fieldset id="Ex8">
<legend>Exercício 8</legend>
<?php
//EXERCÍCIO 8
$i=0;
$j=0;
for($i=0;$i<=4;$i++)
{
	$x[$i] =isset ($_GET["ble$i"])?$_GET["ble$i"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
				
}
for($j=0;$j<=4;$j++)
{
	$y[$j] =isset ($_GET["bl$j"])?$_GET["bl$j"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário
				
}
$iz=0;

 for($i=0;$i <5; $i++){ 
 for($j=0; $j<5; $j++){  //j se inicia em 0
 
    if(($x[$i]) < ($x[$j])){ 
	$aux = $x[$i]; //o auxiliar recebe o valor de i para que esse valor não seja perdido (agr aux valerá i)
       $x[$i] = $x[$j]; //i recebe j
       $x[$j] = $aux; //j receberá o valor do aux, que neste caso vale i
    						 }  //fecha o if  
 }
 } 
					
 for($i=0;$i <5; $i++){ 
 for($j=0; $j<5; $j++){  //j se inicia em 0
 	if(($y[$i]) < ($y[$j])){ //faz a comparaçao do ponteiro com valor i e com valor j
      //se i<j então ocorre a inversão dos valores do vetor
       $aux = $y[$i]; //o auxiliar recebe o valor de i para que esse valor não seja perdido (agr aux valerá i)
       $y[$i] = $y[$j]; //i recebe j
       $y[$j] = $aux; //j receberá o valor do aux, que neste caso vale i
    						 }  //fecha o if  				 
  					} //fecha o for
 					} 
					echo("Array x:");
$i=0;while($i<=4)
{
echo("[".$i."] =>".$y[$i]."<br/>");
$i++;
}
$i=0;
echo("Array y:");
while($i<=4)
{
echo("[".$i."] =>".$x[$i]."<br/>");
$i++;
}
$i=0;
$iz=0;
$j=0;
$c=0;
while($c<10)
{
	$z[$iz]= $x[$i];
	$iz++;
	$z[$iz]= $y[$i];
	$i++;
	$iz++;
	$c++;
}
for($i=0;$i <10; $i++){ 
 for($j=0; $j< 10; $j++){  //j se inicia em 0
 
    if(($z[$i]) < ($z[$j])){ 
       $aux = $z[$i]; //o auxiliar recebe o valor de i para que esse valor não seja perdido (agr aux valerá i)
       $z[$i] = $z[$j]; //i recebe j
       $z[$j] = $aux; //j receberá o valor do aux, que neste caso vale i
    						 }
 }
}


$i=0;
echo("Array z:");
while($i<=9)
{
echo("[".$i."] =>".$z[$i]."<br/>");
$i++;
}
?>
</fieldset>
<fieldset id="Ex10">
<legend>Exercício 10</legend>
<?php
 //EXERCÍCIO 10
 $ap=0;
for($i=0;$i<=7;$i++)
{
	$gb[$i] =isset ($_GET["Ga$i"])?$_GET["Ga$i"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário				
}

for($alu=0;$alu<=7;$alu++)
{
for($i=0;$i<=7;$i++)
{
	$al[$i] =isset ($_GET["Rp$i$alu"])?$_GET["Rp$i$alu"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário				
if($al[$i]==$gb[$i])
{
	$a++;
}	
	}
	echo("O aluno ".$alu." acertou ".$a."<br/>");
	if($a>=6)
	{
		$ap++;
	}
	$a=0;
}

$ap= ($ap*100)/10;
echo("A percentagem de alunos aprovados é de: ".$ap."%");
?>
</fieldset>
<fieldset id="Ex11">
<legend>Exercício 11</legend>
<?php
 //EXERCÍCIO 11
for($i=1;$i<=12;$i++)
{
	$tm[$i] =isset ($_GET["Tm$i"])?$_GET["Tm$i"]:0; //Cria uma variável e atribui á ela o respectivo valor do name do formulário				
}
$cma=0;
$cme=0;
//MAIOR E MENOR
for($i=1;$i<=12;$i++)
{
	if($i==1)
	{
		$ma= $tm[$i];
		$me= $tm[$i];
	}
	if($ma<$tm[$i] && $i>1)
	{
		$ma= $tm[$i];
		$cma= $i;
	}
	if($tm[$i]<$me && $i>1)
	{
		$me= $tm[$i];
		$cme= $i;
	}
}
if($cma==1)
{
	echo"<br/> A maior temperatura foi a do mês de Janeiro<br/>";
}
elseif($cma==2)
{
	echo"<br/> A maior temperatura foi a do mês de Fevereiro<br/>";
}
elseif($cma==3)
{
	echo"<br/> A maior temperatura foi a do mês de Março<br/>";
}
elseif($cma==4)
{
	echo"<br/> A maior temperatura foi a do mês de Abril<br/>";
}
elseif($cma==5)
{
	echo"<br/> A maior temperatura foi a do mês de Maio<br/>";
}
elseif($cma==6)
{
	echo"<br/> A maior temperatura foi a do mês de Junho<br/>";
}
elseif($cma==7)
{
	echo"<br/> A maior temperatura foi a do mês de Julho<br/>";
}
elseif($cma==8)
{
	echo"<br/> A maior temperatura foi a do mês de Agosto<br/>";
}
elseif($cma==9)
{
	echo"<br/> A maior temperatura foi a do mês de Setembro<br/>";
}
elseif($cma==10)
{
	echo"<br/> A maior temperatura foi a do mês de Outubro<br/>";
}
elseif($cma==11)
{
	echo"<br/> A maior temperatura foi a do mês de Novembro<br/>";
}
elseif($cma==12)
{
	echo"<br/> A maior temperatura foi a do mês de Dezembro<br/>";
}
//MENOR
if($cme==1)
{
	echo"<br/> A menor temperatura foi a do mês de Janeiro<br/>";
}
elseif($cme==2)
{
	echo"<br/> A menor temperatura foi a do mês de Fevereiro<br/>";
}
elseif($cme==3)
{
	echo"<br/> A menor temperatura foi a do mês de Março<br/>";
}
elseif($cme==4)
{
	echo"<br/> A menor temperatura foi a do mês de Abril<br/>";
}
elseif($cme==5)
{
	echo"<br/> A menor temperatura foi a do mês de Maio<br/>";
}
elseif($cme==6)
{
	echo"<br/> A menor temperatura foi a do mês de Junho<br/>";
}
elseif($cme==7)
{
	echo"<br/> A menor temperatura foi a do mês de Julho<br/>";
}
elseif($cme==8)
{
	echo"<br/> A menor temperatura foi a do mês de Agosto<br/>";
}
elseif($cme==9)
{
	echo"<br/> A menor temperatura foi a do mês de Setembro<br/>";
}
elseif($cme==10)
{
	echo"<br/> A menor temperatura foi a do mês de Outubro<br/>";
}
elseif($cme==11)
{
	echo"<br/> A menor temperatura foi a do mês de Novembro<br/>";
}
elseif($cme==12)
{
	echo"<br/> A menor temperatura foi a do mês de Dezembro<br/>";
}
?>
</fieldset>	
</form>
<h3>Feito por Ingrid de Assis Souza 2ºIIA<h3/>
</body>
</html>