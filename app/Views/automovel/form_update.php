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

// var_dump($automovel); // Só pra ver o ARRAY

helper('form');

$attributes = ['class' => 'form-horizontal', 'role' => 'form'];


echo form_open('automovel/confirma/'.$automovel['TB_AUTOMOVEL_ID']."/upd", $attributes);





$attributes_label = ['class' => 'col-sm-3 control-label no-padding-right'];
$attributes_input = ['class' => 'col-xs-10 col-sm-5'];

echo '<div class="form-group">';
echo form_label('ID','TB_AUTOMOVEL_ID',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_ID', $automovel['TB_AUTOMOVEL_ID'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Nome do Veiculo','TB_AUTOMOVEL_NOME',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_NOME', $automovel['TB_AUTOMOVEL_NOME'],$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Ano','TB_AUTOMOVEL_ANO_FAB',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_ANO_FAB', $automovel['TB_AUTOMOVEL_ANO_FAB'],$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Cor','TB_AUTOMOVEL_COR',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_COR', $automovel['TB_AUTOMOVEL_COR'],$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('KM','TB_AUTOMOVEL_KM', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_KM', $automovel['TB_AUTOMOVEL_KM'],$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Valor D', 'TB_AUTOMOVEL_VALOR_D',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_VALOR_D', $automovel['TB_AUTOMOVEL_VALOR_D'],$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Status','TB_AUTOMOVEL_STATUS', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_STATUS', $automovel['TB_AUTOMOVEL_STATUS'],$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Marca', 'TB_MARCA_ID',$attributes_label);
echo '<div class="col-sm-9">';
echo form_dropdown('TB_MARCA_ID', $marca, $automovel['TB_MARCA_ID'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Modelo','TB_MODELO_ID',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_MODELO_ID', $automovel['TB_MODELO_ID'],$attributes_input);
echo '</div>';
echo '</div>';


$attributes_submit = ['class' => "btn btn-info"];
											// <button class="btn btn-info" type="button">
echo '
<div class="clearfix form-actions">
  <div class="col-md-offset-3 col-md-9">';

echo form_submit($attributes_submit, 'Salvar');

echo '	
  </div>
</div>';



 ?>



 <?= $this->endSection() // ENCERRA A SECTION?>
