<?php require_once "components/topo.php"; ?>
<h1>Lista de Alunos Cadastrados</h1>

<?php
    require_once "funcoes/conexoes.php";
    $sql = "SELECT * FROM alunos";
    $resultSet = mysqli_query($conn, $sql);

    $totalRegistros = mysqli_num_rows($resultSet);
    if($totalRegistros > 0){
?>
<h2>Total de registros encontrado foi de <?=$totalRegistros ?></h2>
<table>
    <thead>
        <tr>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>TURMA</th>
            <th>NOME DO RESPONSÁVEL</th>
            <th>CPF DO RESPONSÁVEL</th>
            <th>TELEFONE</th>
            <th>PAGAMENTO EM DIA</th>
            <th>AÇÃO</th>
        </tr>
    </thead>
    <tbody>
        <?php while( $registro = mysqli_fetch_assoc($resultSet)){ ?>
        <tr>
            <td><?=$registro["nome"]?></td>
            <td><?=$registro["email"]?></td>
            <td><?=$registro["turma"]?></td>
            <td><?=$registro["nomeresp"]?></td>
            <td><?=$registro["cpfresp"]?></td>
            <td><?=$registro["telefone"]?></td>
            <td><?=$registro["pagamento"]?></td>
            <td>
                <a href="editar.php?id=<?=$registro["id"]?>" class="btn btn-edit">
                    <i class="fas fa-edit"></i> 
                </a>

                <a href="deletar.php?id=<?=$registro["id"]?>" onclick="return excluir()" class="btn btn-remove">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php
    }else{
        echo "<div class= mensagem>Nenhuma movimentação encontrada no banco de dados!</div>";
    }
?>
<?php require_once "components/rodape.php"; ?>