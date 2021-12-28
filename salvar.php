<?php require_once "components/topo.php"; ?>
<?php

    require_once "funcoes/conexoes.php";

    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $turma = trim($_POST["turma"]);
    $nomeresp = trim($_POST["nomeresp"]);
    $cpfresp = trim($_POST["cpfresp"]);
    $telefone = trim($_POST["telefone"]);
    $pagamento = trim($_POST["pagamento"]);

    $sql = "INSERT INTO alunos VALUES(NULL, '".$nome."', '".$email."', '".$turma."', '".$nomeresp."', '".$cpfresp."', '".$telefone."', '".$pagamento."')";

    if(mysqli_query($conn, $sql)){
        echo "<div class= mensagem>Dados de " . $nome . " enviados com sucesso!</div>";
    }else{
        echo "<div class= mensagem>Não foi possível cadastrar o aluno!</div>";
    }

    mysqli_close($conn);
?>
<?php require_once "components/rodape.php"; ?>