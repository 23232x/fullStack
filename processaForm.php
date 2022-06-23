<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Formulario</title>
    </head>


<body>
    


<?php
//se o banco de dados ainda nao existe, crie e tambem a tabela
if(!file_exists("cadastro.db")){
    $db = new SQLite3("cadastro.db") or die('Unable to open database');
    $db->exec("CREATE TABLE chamado (id integer primary key autoincrement, nome CHAR(32), equipamento CHAR(32), descricao CHAR(120));");
}else{
    $db = new SQLite3("cadastro.db") or die('Unable to open database');
}
    //faça o cadastro do cliente
    $db->exec("insert into chamado
    values('$_POST[nome]','$_POST[equipamento]','$_POST[descricao]')") or
        die(“erro de sql”);

      
?>

<body>
    
</body>
</html>