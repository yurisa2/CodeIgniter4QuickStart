
<?php

$tabela = new \CodeIgniter\View\Table();

//Adiciona Heading
$tabela->setHeading('TB_FUNCIONARIO_ID', 'TB_FUNCIONARIO_NOME','TB_FUNCIONARIO_TEL', 'TB_FUNCIONARIO_DT_CONTRATO', 'TB_CARGO_ID', 'Alterar', 'deletar');
echo $tabela->generate($funcionario);



?>
