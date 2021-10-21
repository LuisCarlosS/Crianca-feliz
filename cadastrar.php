<?php require_once "components/topo.php"; ?>
       <h3>Cadastro de Alunos</h3>
        <form action="salvar.php" method="post">
                    <div>
                        <label for="">Nome:</label><br>
                        <input type="text" name="nome" id="nome"><br><br>
                    </div>
                    <div>
                        <label for="">Email:</label><br>
                        <input type="email" name="email" id="email"><br><br>
                    </div>
                    <div>
                        <label for="">Turma:</label><br>
                        <input type="text" name="turma" id="turma"><br><br>
                    </div>
                    <div>
                        <label for="">Nome do responsável:</label><br>
                        <input type="text" name="nomeresp" id="nomeresp"><br><br>
                    </div>
                    <div>
                        <label for="">CPF do responsável:</label><br>
                        <input type="text" name="cpfresp" id="cpfresp" data-mask="999.999.999-99"><br><br>
                    </div>
                    <div>
                        <label for="">Telefone com ddd:</label><br>
                        <input type="text" name="telefone" id="telefone" data-mask="(99)99999-9999"><br><br>
                    </div>
                    <div>
                        <label for="">Pagamento em dia:</label>
                        <select name="pagamento" id="pagamento">
                            <option value="" selected></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select><br><br>
                    </div>
                    <input type="submit" value="Cadastrar" id="btn">
                </form>
                <div id="resposta"></div>
    <?php require_once "components/rodape.php"; ?>