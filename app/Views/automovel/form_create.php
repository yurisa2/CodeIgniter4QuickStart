<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php

/**
 * View Exemplo PW3
 *
 * @category   View CodeIgniter4
 * @package    PW3
 * @author     @yurisa2 <yuri@sa2.com.br>
 * @author     Another Author <another@example.com>
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */




// Helpers - Formulario- https://codeigniter.com/user_guide/helpers/form_helper.html

helper('form');

$attributes = ['class' => 'form-horizontal', 'role' => 'form'];
echo form_open('automovel/create_automovel', $attributes);

$attributes_label = ['class' => 'col-sm-3 control-label no-padding-right'];
$attributes_input = ['class' => 'col-xs-10 col-sm-5'];

echo '<div class="form-group">';
echo form_label('Nome do Veiculo','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_NOME','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Ano','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_ANO_FAB','',$attributes_input);
echo '</div>';
echo '</div>';
// echo '<br>';

echo '<div class="form-group">';
echo form_label('Cor','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_COR','',$attributes_input);
echo '</div>';
echo '</div>';
// echo '<br>';

echo '<div class="form-group">';
echo form_label('KM','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_KM','',$attributes_input);
echo '</div>';
echo '</div>';
// echo '<br>';

echo '<div class="form-group">';
echo form_label('Valor D','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_VALOR_D','',$attributes_input);
echo '</div>';
echo '</div>';
// echo '<br>';

echo '<div class="form-group">';
echo form_label('Status','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_STATUS','',$attributes_input);
echo '</div>';
echo '</div>';
// echo '<br>';

echo '<div class="form-group">';
echo form_label('Marca','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_dropdown('TB_MARCA_ID', $marca);
echo '</div>';
echo '</div>';
// echo '<br>';

echo '<div class="form-group">';
echo form_label('Modelo','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_dropdown('TB_MODELO_ID', $modelo);
echo '</div>';
echo '</div>';
// echo '<br>';
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
