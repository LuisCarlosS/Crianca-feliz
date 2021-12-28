<?php require_once "components/topo.php"; ?>
<?php

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $turma = $_POST["turma"];
    $nomeresp = $_POST["nomeresp"];
    $cpfresp = $_POST["cpfresp"];
    $telefone = $_POST["telefone"];
    $pagamento = $_POST["pagamento"];

    require_once "funcoes/conexoes.php";

    $sql = "UPDATE alunos SET id = '".$id."', nome = '".$nome."', email = '".$email."', turma = '".$turma."', nomeresp = '".$nomeresp."', cpfresp = '".$cpfresp."', telefone = '".$telefone."', pagamento = '".$pagamento."'";

    if(mysqli_query($conn, $sql)){
        echo "<div class= mensagem>Cadastro editado com sucesso!</div>";
    }else{
        echo "<div class= mensagem>Cadastro não pode ser editado!</div>";
    }

    mysqli_close($conn);

?>
<?php require_once "components/rodape.php"; ?>