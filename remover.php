<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Chamados</title>
</head>
<body>

<h3>Remover chamados</h3>

<?php
    if(file_exists("cadastro.db")){
    $db = new SQLite3("cadastro.db") or die('Unable to open database');
    $db->exec("delete from chamado where id = ".$_GET["id"]) or die("erro de sql");
    $db->close();
    echo ("Registro com id=".$_GET["id"]. " solucionado e apago");
    echo("<a href = alterar.php?id=".$row["id"].">Alterar</a><br /><br />");
}else{
    echo ("Banco de dados não encontrado");
}
?>
    
</body>
</html>