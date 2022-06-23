<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efetivação de update</title>
</head>
<body>


Bom dia!!<br />
<?php
//se o banco de dados ainda nao existe, crie e tambem a tabela
if(file_exists("cadastro.db")){
$db = new SQLite3("cadastro.db") or die('Unable to open database');
$db->exec("update chamado set nome = '$_POST[nome]', equipamento =
'$_POST[equipamento]',
descricao = '$_POST[descricao]' where id = $_GET[id]") or die("Erro de alteração");
$db->close();
echo ("chamado com id=".$_GET["id"]. " alterado!");
}else{
echo ("Banco de dados não encontrado");
}
?>
    
</body>
</html>