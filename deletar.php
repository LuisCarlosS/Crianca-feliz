<?php require_once "components/topo.php"; ?>
<?php

require_once "funcoes/conexoes.php";

$id = $_GET["id"];

$sql = "DELETE FROM alunos WHERE id = " . $id;
if(mysqli_query($conn, $sql)){
    echo "<div class= mensagem>Cadastro excluido com sucesso!</div>";
}else{
    echo "<div class= mensagem>Erro ao excluir o cadastro!</div>";
}

mysqli_close($conn);
?>
<?php require_once "components/rodape.php"; ?>