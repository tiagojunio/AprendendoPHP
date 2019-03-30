<?php error_reporting(0); require ("./header.php"); require ("./conecta.php"); ?>
<?php
function insereProduto($conexao, $nome, $preco) {
    $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
    return mysqli_query($conexao, $query);
}

$nome = $_GET["nome"];
$preco = $_GET["preco"];
$conexao = mysqli_connect('localhost', 'root', '', 'loja');


if (insereProduto($conexao, $nome, $preco)) {
    ?>
    <p class = "text-success">O produto <?= $nome; ?>, Preço R$ <?= $preco; ?> Reais cadastrado com sucesso! </p>
<?php } else { ?>
    <p class = "text-danger">O produto <?= $nome; ?> Não Foi Cadastrado! </p>
    <?php
}
?>



<!--<p class = "alert-success">O produto <1?= $nome; ?>, Preço R$<1?= $preco; ?> Reais cadastrado com sucesso! </p>-->

<!--<p class = "alert-success">O produto <!?= $nome; ?>, Preço R$<!?= $preco; ?> Reais cadastrado com sucesso! </p>-->



<?php require ("./footer.php"); ?>
