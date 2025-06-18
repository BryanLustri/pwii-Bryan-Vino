<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

$nome = "joão";
$Sobrenome ="Siles";
$numero = 4;
$letra ='abcd';
 /* Não existe diferença entre aspas duplas e crase na declaração de strings e caracteres*/

echo $numero . "${nome} <h1> ${Sobrenome} </h1>";
echo $numero . "<p> " . $nome .
" " . $Sobrenome . "</p>";
echo "<p>Escrita de caracter: ${letra}"
?>