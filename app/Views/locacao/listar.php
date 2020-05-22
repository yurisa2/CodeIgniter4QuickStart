<?php

$tabela = new \CodeIgniter\View\Table();


$tabela->setHeading('TB_LOCACAO_ID', 'TB_LOCACAO_TIPO','TB_LOCACAO_VALOR','TB_LOCACAO_DT_INICIO','TB_LOCACAO_DT_FIM', 'TB_CLIENTE_ID', 'TB_FUNCIONARIO_ID','TB_AUTOMOVEL_ID', 'Alterar', 'deletar');
echo $tabela->generate($locacao);


?>