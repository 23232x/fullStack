<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar dados do cadastro</title>
</head>
<body>

<?php

if(file_exists("cadastro.db")){
$db = new SQLite3("cadastro.db") or die('Unable to open database');
echo("banco carregado<br />");
//selecione o registro desejado
$result = $db->query("select * from chamado where id = ".$_GET['id']) or die('Query failed');
//se existir esse registro no banco
if($row = $result->fetchArray(SQLITE3_ASSOC)){
?>

   <div class="formulario">
    <h1>Formulário de cadastro de usuário</h1>
    <form action="alteracao.php?id=<?php echo $_GET['id']?>" method="POST">

                <ul>
                    <li><label for="nome">Nome:</label></li>
                    <li><input type="text" name="nome" value = "<?php echo $row["nome"] ?>" required /></li>
                    <br>

                    <li><label for="equipamento">Equipamento</label></li>
                    <li><input type="text" name="equipamento" value = "<?php echo $row["equipamento"] ?>" required /></li>
                    <br>

                    <li><label for="desc">Descrição do problema</label></li>
                    <li><textarea name="descricao" id="descricao" cols="30" rows="10" value="<?php echo $row["email"] ?>"></textarea></li>
                </ul>
                <input type="submit" name="Enviar" id="enviar">


                <br /><br />
                <input type="submit" value="Enviar" />
                <input type="reset" value="Resetar" />
</form>
<?php
}
}else{
die("banco de dados não existente!<br />");
}

?>
</div>
        

    
</body>
</html>