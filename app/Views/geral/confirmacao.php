<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php
/**
 * View Confirmacao PW3
 *
 * @category   View CodeIgniter4
 * @package    PW3
 * @author     Yuri sá
 * @author     @yurisa2
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */


echo $titulo;
echo '<br>';


echo $msg;
echo '<br>';

helper('form');

$attributes = ['class' => 'form-horizontal', 'role' => 'form'];
echo form_open($destino, $attributes);

$attributes_label = ['class' => 'col-sm-3 control-label no-padding-right'];
$attributes_input = ['class' => 'col-xs-10 col-sm-5'];
echo '<div class="form-group">';
echo form_label('ID', 'label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_ID', $automovel['TB_AUTOMOVEL_ID'], ["readonly" => "readonly"]);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Nome do Veiculo', 'label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_NOME', $automovel['TB_AUTOMOVEL_NOME'], ["readonly" => "readonly"]);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Ano', 'label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_ANO_FAB', $automovel['TB_AUTOMOVEL_ANO_FAB'], ["readonly" => "readonly"]);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Cor', 'label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_COR', $automovel['TB_AUTOMOVEL_COR'], ["readonly" => "readonly"]);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('KM', 'label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_KM', $automovel['TB_AUTOMOVEL_KM'], ["readonly" => "readonly"]);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Valor D', 'label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_VALOR_D', $automovel['TB_AUTOMOVEL_VALOR_D'], ["readonly" => "readonly"]);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Status', 'label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_STATUS', $automovel['TB_AUTOMOVEL_STATUS'], ["readonly" => "readonly"]);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Marca', 'label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_MARCA_ID', $automovel['TB_MARCA_ID'], ["readonly" => "readonly" ]); // COMO ERA ANTIGAMEN, '"readonly" => "readonly"]TE

echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Modelo', 'label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_MODELO_ID', $automovel['TB_MODELO_ID'], ["readonly" => "readonly"]);
echo '</div>';
echo '</div>';


$attributes_submit = ['class' => "btn btn-info"];
											// <button class="btn btn-info" type="button">
echo '
<div class="clearfix form-actions">
  <div class="col-md-offset-3 col-md-9">';

echo form_submit($attributes_submit, 'CONFIRMA!');


echo '
  </div>
</div>';


 ?>
 <?= $this->endSection() // ENCERRA A SECTION?>
