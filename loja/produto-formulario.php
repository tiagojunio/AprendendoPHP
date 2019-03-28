<?php require ('./header.php'); ?>
<h1>formulario cadastro de produto</h1>
<br/>
<div class="col-6">
    <form action="adiciona-produto.php">
        <div class="form-group">
            Nome do Produto: <input type="text" name="nome">
        </div>
        <div class="form-group">
            Valor do Produto: <input type="number" name="preco">
        </div>

        <button type="submit" class="btn btn-success tex-aling">Cadastrar</button>
    </form>
</div>




<?php require ('./footer.php'); 
