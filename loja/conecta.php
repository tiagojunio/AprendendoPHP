<?php

$conexao = mysqli_connect ('localhost', 'root', '', 'loja-alura');
mysqli_query($conexao, $query);
mysqli_close($conexao);


?>
