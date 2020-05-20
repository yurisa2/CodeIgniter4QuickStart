<?php

$tabela = new \CodeIgniter\View\Table();

//Adiciona Heading
$tabela->setHeading('TB_CARGO_ID', 'TB_CARGO_NOME', 'Alterar', 'deletar');
echo $tabela->generate($cargo);


?>
