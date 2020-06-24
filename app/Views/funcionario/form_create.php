<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php

/**
 * View Exemplo PW3
 *
 * @category   View CodeIgniter4
 * @package    PW3
 * @author     Gabriel da Silva
 * @author     Daniel
 * @author     Luigi
 * @author     Leandro
 * @author     Valérya
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */




// Helpers - Formulario- https://codeigniter.com/user_guide/helpers/form_helper.html

helper('form');

$attributes = ['class' => 'form-horizontal', 'role' => 'form'];
echo form_open('funcionario/create_funcionario', $attributes);

$attributes_label = ['class' => 'col-sm-3 control-label no-padding-right'];
$attributes_input = ['class' => 'col-xs-10 col-sm-5'];

echo '<div class="form-group">';
echo form_label('Nome do Funcionario ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_FUNCIONARIO_NOME','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Telefone ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_FUNCIONARIO_TEL','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Data Contrato ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_FUNCIONARIO_DT_CONTRATO','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Cargo ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CARGO_ID','',$attributes_input);
echo '</div>';
echo '</div>';

$attributes_submit = ['class' => "btn btn-info"];

echo '
<div class="clearfix form-actions">
  <div class="col-md-offset-3 col-md-9">';

echo form_submit($attributes_submit, 'Salvar');

echo '
  </div>
</div>';


 ?>
<?= $this->endSection() // ENCERRA A SECTION?>
