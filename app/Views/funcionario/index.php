<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php

$tabela = new \CodeIgniter\View\Table();

$template = [
        'table_open' => '	<table id="simple-table" class="table  table-bordered table-hover">'
];

$tabela->setTemplate($template);
//Adiciona Heading
$tabela->setHeading('id', 'Nome','Tel', 'Dt Contrato', 'Cargo', 'Alterar', 'deletar');
echo $tabela->generate($funcionario);



?>

<?= $this->endSection() // ENCERRA A SECTION?>
