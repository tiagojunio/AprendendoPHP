<?php require ('./header.php');
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];

$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
$conexao = mysqli_connect('localhost', 'root', '', 'loja-alura');
mysqli_query($conexao, $query);
mysqli_close($conexao);


?>

<?php
if (mysqli_query($conexao, $query)) {
    ?>
    <p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
    <?php
} else {
    ?>
    <p class="alert-danger">O produto <?= $nome; ?> não foi adicionado</p>
    <?php
}
?>


<!--<p class = "alert-success">O produto <1?= $nome; ?>, Preço R$<1?= $preco; ?> Reais cadastrado com sucesso! </p>-->

<?php require ('./footer.php'); ?>
