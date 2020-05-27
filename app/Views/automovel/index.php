<?php

$tabela = new \CodeIgniter\View\Table();

$tabela->setHeading('TB_AUTOMOVEL_ID', 'TB_AUTOMOVEL_NOME','TB_AUTOMOVEL_ANO_FAB','TB_AUTOMOVEL_COR','TB_AUTOMOVEL_KM', 'TB_AUTOMOVEL_VALOR_D','TB_AUTOMOVEL_STATUS','TB_MARCA_ID','TB_MODELO_ID', 'TB_MARCA_DESC', 'TB_MODELO_DESC', 'Alterar', 'deletar');

echo $tabela->generate($automovel);


 ?>
