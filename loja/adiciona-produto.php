<?php
error_reporting(0);
require ("./header.php");
require ("./conecta.php");
?>

<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];

$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";

if (mysqli_query($conexao, $query)) {
    ?>
    <p class = "alert-success">O produto <?= $nome; ?>, Preço R$ <?= $preco; ?> Reais cadastrado com sucesso! </p>
<?php } else { ?>
    <p class = "alert-danger">O produto <?= $nome; ?> Não Foi Cadastrado! </p>
    <?php
}
mysqli_close($conexao);
?>



<!--<p class = "alert-success">O produto <1?= $nome; ?>, Preço R$<1?= $preco; ?> Reais cadastrado com sucesso! </p>-->

<!--<p class = "alert-success">O produto <!?= $nome; ?>, Preço R$<!?= $preco; ?> Reais cadastrado com sucesso! </p>-->



<?php require ("./footer.php"); ?>
