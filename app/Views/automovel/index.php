<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>


<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php
//https://codeigniter4.github.io/userguide/outgoing/view_layouts.html?highlight=extend

$tabela = new \CodeIgniter\View\Table();

$template = [
        'table_open' => '	<table id="simple-table" class="table  table-bordered table-hover">'
];

$tabela->setTemplate($template);

$tabela->setHeading( 'TB_AUTOMOVEL_NOME','TB_AUTOMOVEL_ANO_FAB','TB_AUTOMOVEL_COR','TB_AUTOMOVEL_KM', 'TB_AUTOMOVEL_VALOR_D','TB_AUTOMOVEL_STATUS', 'TB_MARCA_DESC', 'TB_MODELO_DESC', 'Alterar', 'deletar');

echo $tabela->generate($automovel);


 ?>

<?= $this->endSection() // ENCERRA A SECTION?>
