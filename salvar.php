<?php require_once "components/topo.php"; ?>
<?php

    require_once "./funcoes/conexoes.php";

    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $turma = trim($_POST["turma"]);
    $nomeresp = trim($_POST["nomeresp"]);
    $cpfresp = trim($_POST["cpfresp"]);
    $telefone = trim($_POST["telefone"]);
    $pagamento = trim($_POST["pagamento"]);

    $sql = "INSERT INTO alunos VALUES(NULL, '".$nome."', '".$email."', '".$turma."', '".$nomeresp."', '".$cpfresp."', '".$telefone."', '".$pagamento."', now())";

    if(mysqli_query($conn, $sql)){
        echo "<p>Dados de: " . $nome . ", enviados com sucesso!</p>";
    }else{
        echo "<p>Não pode cadastrar o aluno</p>";
    }

    mysqli_close($conn);
?>
<?php require_once "components/rodape.php"; ?>