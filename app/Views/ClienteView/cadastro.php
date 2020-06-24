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
echo form_open('Cliente/create_cliente', $attributes);

$attributes_label = ['class' => 'col-sm-3 control-label no-padding-right'];
$attributes_input = ['class' => 'col-xs-10 col-sm-5'];

echo '<div class="form-group">';
echo('<b>CADASTRO DE CLIENTES</b><br><br>');

echo '<div class="form-group">';
echo form_label('Nome do Cliente: ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_NOME','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Telefone: ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_TEL','',$attributes_input);
echo '</div>';echo '
  </div>
</div>';

echo '</div>';

echo '<div class="form-group">';
echo form_label('Sexo: ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_SEXO','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Email: ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_EMAIL','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Senha: ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_SENHA','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Endereco: ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_ENDERECO','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Complemento: ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_COMPLEMENTO','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Bairro: ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_BAIRRO','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Cidade: ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_CIDADE','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Uf: ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_UF','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Data de nascimento: ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_DT_NASC','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Data cadastro: ','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_DT_CAD','',$attributes_input);
echo '</div>';
echo '</div>';

$attributes_submit = ['class' => "btn btn-info"];

echo '
<div class="clearfix form-actions">
  <div class="col-md-offset-3 col-md-9">';

echo form_submit('mysubmit', 'Cadastrar');

echo '
  </div>
</div>';


 ?>
 <?= $this->endSection() // ENCERRA A SECTION?>
