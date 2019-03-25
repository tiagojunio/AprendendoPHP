<?php
require ('./header.php');
error_reporting(0)
?>
<?php
$nome = $_GET["nome"];
$preco = $_GET ["preco"];

$query = "insert into produto (nome, preco) value('{$nome}', {$preco})";
?>
<p class = "alert-success">O produto <?= $nome; ?>, Preço R$<?= $preco; ?> Reais cadastrado com sucesso! </p>

<?php require ('./footer.php'); ?>
