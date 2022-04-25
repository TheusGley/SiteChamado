<?php



$conecta = mysqli_connect('127.0.0.1', 'root', '') or print (mysqli_error()); 
print "Conexão OK!"; 
mysqli_close($conecta); 

mysqli_select_db('login', $conecta) or print(mysqli_error()); 

$sql = "SELECT usuario,senha FROM usuario"; 
$result = mysqli_query($sql, $conecta); 
 
/* Escreve resultados até que não haja mais linhas na tabela */ 
 
while($consulta = mysqli_fetch_array($result)) { 
   print "Coluna1: $consulta[usuario] - Coluna2: $consulta[senha]<br>"; 
} 
mysqli_free_result($result); 
mysqli_close($conecta); 
?>