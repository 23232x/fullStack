<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Full Stack - Cadastro de chamados</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="main">
        <h3>Listagem de chamdo Chamado</h3>

        <nav>
            <menu>
                <li><a href="index.html">Novo Chamado</a></li>
            </menu>
        </nav>



        <div class="listaChamados">
        Lista Chamados<br />
<?php
//se o banco de dados existe então abra-o
if(file_exists("cadastro.db")){
$db = new SQLite3("cadastro.db") or die('Unable to open database');
echo("banco carregado<br />");
}else{
die("banco de dados não existente!<br />");
}
//faça a leitura dos dados
$result = $db->query("select * from chamado") or die('Query failed');
//imprima cada uma das linhas
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
echo("Nome:" . $row["nome"]."<br />");
echo("Equipamento " . $row["equipamento"] ."<br />");
echo("Descrição:" . $row["desc"] ."<br />");
echo("<a href = remover.php?id=".$row["id"].">Remover</a><br /><br />");
}

$db->close();
?>

</div>

</section>




    <script src="script.js"></script>
</body>

</html>