<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>


<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>


<?php

$tabela = new \CodeIgniter\View\Table();

$template = [
        'table_open' => '	<table id="simple-table" class="table  table-bordered table-hover">'
];

$tabela->setTemplate($template);


//Adiciona Heading
$tabela->setHeading('TB_CARGO_ID', 'TB_CARGO_NOME', 'Alterar', 'deletar');
echo $tabela->generate($cargo);


?>


<?= $this->endSection() // ENCERRA A SECTION?>
