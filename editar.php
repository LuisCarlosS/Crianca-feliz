<?php

require_once "components/topo.php";
require_once "funcoes/conexoes.php";

$id = $_GET["id"];
$sql = "SELECT * FROM alunos WHERE id = " .$id;
$resultSet = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultSet) == 0){
    echo "Nenhuma movimentação encontrada";
    exit;
}

$registro = mysqli_fetch_assoc($resultSet);
?>
       <h3>Editar Cadastro de Alunos</h3>
        <form action="confirmar_edicao.php" method="post">
                    <input type="hidden" name="id" value="<?=$registro["id"]?>">
                    <div>
                        <label for="">Nome:</label><br>
                        <input type="text" name="nome" id="nome" value="<?=$registro["nome"] ?>"><br><br>
                    </div>
                    <div>
                        <label for="">Email:</label><br>
                        <input type="email" name="email" id="email" value="<?=$registro["email"] ?>"><br><br>
                    </div>
                    <div>
                        <label for="">Turma:</label><br>
                        <input type="text" name="turma" id="turma" value="<?=$registro["turma"] ?>"><br><br>
                    </div>
                    <div>
                        <label for="">Nome do responsável:</label><br>
                        <input type="text" name="nomeresp" id="nomeresp" value="<?=$registro["nomeresp"] ?>"><br><br>
                    </div>
                    <div>
                        <label for="">CPF do responsável:</label><br>
                        <input type="text" name="cpfresp" id="cpfresp" value="<?=$registro["cpfresp"] ?>" data-mask="999.999.999-99"><br><br>
                    </div>
                    <div>
                        <label for="">Telefone com ddd:</label><br>
                        <input type="text" name="telefone" id="telefone" value="<?=$registro["telefone"] ?>" data-mask="(99)99999-9999"><br><br>
                    </div>
                    <div>
                        <label for="">Pagamento em dia:</label>
                        <select name="pagamento" id="pagamento" value="<?=$registro["pagamento"] ?>">
                            <option value="" selected></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select><br><br>
                    </div>
                    <input type="submit" value="Editar Cadastro" id="btn">
                </form>
                <div id="resposta"></div>
    <?php require_once "components/rodape.php"; ?>