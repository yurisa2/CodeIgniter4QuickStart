<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php
/**
 * Lista da TB_CLIENTE PW3
 *
 * @category   Lista da TB_CLIENTE
 * @package    PW3
 * @author     MATHEUS SOUZA FERRO <matheussouzaferro@gmail.com>
 * @author     AMANDA BATISTA <EMAIL@GMAIL.COM>
 * @author     VICTOR HENRIQUE <EMAIL@GMAIL.COM>
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */
helper('form');

$attributes = ['class' => 'form-horizontal', 'role' => 'form'];
echo form_open('Cliente/update_cliente', $attributes);


echo('<b>ALTERAR DADOS DE CLIENTES</b><br><br>');

$attributes_label = ['class' => 'col-sm-3 control-label no-padding-right'];
$attributes_input = ['class' => 'col-xs-10 col-sm-5'];

echo '<div class="form-group">';
echo form_label('ID: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_ID', $cliente['TB_CLIENTE_ID'],array_merge($attributes_input, ['readonly' => true]));
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Nome do Cliente: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_NOME', $cliente['TB_CLIENTE_NOME'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Telefone: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_TEL', $cliente['TB_CLIENTE_TEL'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Sexo: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_SEXO', $cliente['TB_CLIENTE_SEXO'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Email: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_EMAIL', $cliente['TB_CLIENTE_EMAIL'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Senha: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_SENHA', $cliente['TB_CLIENTE_SENHA'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Endereco: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_ENDERECO', $cliente['TB_CLIENTE_ENDERECO'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Complemento: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_COMPLEMENTO', $cliente['TB_CLIENTE_COMPLEMENTO'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Bairro: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_BAIRRO', $cliente['TB_CLIENTE_BAIRRO'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Cidade: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_CIDADE', $cliente['TB_CLIENTE_CIDADE'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Uf: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_UF', $cliente['TB_CLIENTE_UF'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Data de nascimento: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_DT_NASC', $cliente['TB_CLIENTE_DT_NASC'],$attributes_input);
echo '</div>';
echo '</div>';


echo '<div class="form-group">';
echo form_label('Data cadastro: ','label', $attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_DT_CAD', $cliente['TB_CLIENTE_DT_CAD'],$attributes_input);
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
