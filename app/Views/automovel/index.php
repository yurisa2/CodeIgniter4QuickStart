<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php
//https://codeigniter4.github.io/userguide/outgoing/view_layouts.html?highlight=extend

if(isset($search) && $search == true) {
echo  '
<div class="alert alert-block alert-success">

									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									<i class="ace-icon fa fa-search"></i>
                  Resultados para a pesquisa: <b>' .$search_term. '</b>

</div>';
}

$tabela = new \CodeIgniter\View\Table();

$template = [
        'table_open' => '	<table id="simple-table" class="table  table-bordered table-hover">'
];

$tabela->setTemplate($template);

$tabela->setHeading( 'Nome','Ano','Cor','KM', 'Valor D','Status', 'Marca', 'Modelo', 'Alterar', 'Deletar');

echo $tabela->generate($automovel);


 ?>

<?= $this->endSection() // ENCERRA A SECTION?>
