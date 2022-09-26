<h1>Cadastro de filme</h1>

<?php 
    //delete
    if  (isset ($_POST['gravar'])) {
        $sql_salvar_filme = "INSERT INTO filmes
                             (nome, resumo, ano)
                             VALUES (:nome, :resumo, :ano)";
        $filme_salvar_prepara = $conn->prepare($sql_salvar_filme);
        if ($filme_salvar_prepara->execute(array(
            "nome" => $_POST['nome'],
            "resumo" => $_POST['resumo'],
            "ano" => $_POST['ano']
        ))); {
            echo "
            <br>
            <div class=\"alert alert-success\" role=\"alert\">
                Filme Salvo!!!
            </div>
        ";
        }
    }                        
    
     else {
?>
<form method="post">
    <div class="form-floating mb-3">
        <input type="text" name="nome" class="form-control" id="floatingInput" placeholder="Nome">
        <label for="floatingInput">Nome</label>
    </div>
    <div class="form-floating mb-3">
         <input type="text" name="ano" class="form-control" id="floatingInput" placeholder="Ano">
        <label for="floatingInput">Ano</label>
    </div>
    <div class="form-floating">
        <textarea class="form-control" name="resumo" placeholder="Resumo" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Resumo</label>
    </div>
    <br>
    <input class="btn btn-primary" type="submit" name="gravar" value="Gravar"><br><br>
</form>

<?php
    }
?>