<?php 
 $servername = "127.0.0.1";
 $database = "db_site";
 $username = "root";
 $password = "";
 // Criar conexao
 $conn = mysqli_connect($servername, $username, $password, $database);
 // Checando conexão
 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }


 $query = "SELECT id_chamado, nome,email, nucleo, setor, tel, descr from chamado";
 $result = mysqli_query($conn,$query);
 while($fetch = mysqli_fetch_row($result)){
     echo " - ". $fetch[0] . " </td> </tr> </table> " . $fetch[1] . " - " .$fetch[2]." - " .$fetch[3]." - " .$fetch[4]." - " .$fetch[5]." - " .$fetch[6]. "</p>";
 }

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Listas em HTML</title>
</head>

<body>
<table> 
<table border="1">
    <tr>
        <td><?php  ?></td>
        <td>Idade</td>
        <td>Profissão</td>
    </tr>
</table>
</body>
</html>