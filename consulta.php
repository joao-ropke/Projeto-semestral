<?php 
$nome = $_GET["nome"];
$senha = $_GET["Senha"];
echo "pagina consulta <br>";

var_dump($nome);
var_dump($senha);
die;
"select * from usario where nome like $nome && senha = $senha ";

?>