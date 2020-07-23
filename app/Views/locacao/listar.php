<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php

$tabela = new \CodeIgniter\View\Table();

$template = [
        'table_open' => '	<table id="simple-table" class="table  table-bordered table-hover">'
];

$tabela->setTemplate($template);


$tabela->setHeading('id', 'Tipo','Valor','Dt Inicio','Dt Fim', 'Cliente', 'Funcionario','Automovel', 'Alterar', 'Deletar');
echo $tabela->generate($locacao);


?>

<?= $this->endSection() // ENCERRA A SECTION?>
