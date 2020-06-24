<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php

$tabela = new \CodeIgniter\View\Table();

$template = [
        'table_open' => '	<table id="simple-table" class="table  table-bordered table-hover">'
];

$tabela->setTemplate($template);


$tabela->setHeading('TB_LOCACAO_ID', 'TB_LOCACAO_TIPO','TB_LOCACAO_VALOR','TB_LOCACAO_DT_INICIO','TB_LOCACAO_DT_FIM', 'TB_CLIENTE_ID', 'TB_FUNCIONARIO_ID','TB_AUTOMOVEL_ID', 'Alterar', 'deletar');
echo $tabela->generate($locacao);


?>

<?= $this->endSection() // ENCERRA A SECTION?>
