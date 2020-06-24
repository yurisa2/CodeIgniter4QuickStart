<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php

/**
 * View Exemplo PW3
 *
 * @category   View CodeIgniter4
 * @package    PW3
 * @author     @yurisa2 <yuri@sa2.com.br>
 * @author     Antonio Marcos <portejunior5050@gmail.com>
 * @author     Bianca Maria <mariabitabianca@gmail.com>
 * @author     Bruno Almeida <4lmeidasilva@gmail.com>
 * @author     Dayane Yoni <dayaneyoni@gmail.com>
 * @author     Lucas Gonçalves <luc.tricolor.silva648@gmail.com>
 * @author     Lucas Gusmao <lucas.gusmao.m@gmail.com>
 * @author     Rafael Rodrigues <>
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */




// Helpers - Formulario- https://codeigniter.com/user_guide/helpers/form_helper.html

helper('form');

$attributes = ['class' => 'form-horizontal', 'role' => 'form'];
echo form_open('locacao/create_locacao', $attributes);

$attributes_label = ['class' => 'col-sm-3 control-label no-padding-right'];
$attributes_input = ['class' => 'col-xs-10 col-sm-5'];


echo '<div class="form-group">';
echo form_label('Tipo de Locação','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_LOCACAO_TIPO','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Valor','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_LOCACAO_VALOR','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Data de Início','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_LOCACAO_DT_INICIO','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('Data do Fim','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_LOCACAO_DT_FIM','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('ID do Cliente','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_CLIENTE_ID','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('ID do Funcionário','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_FUNCIONARIO_ID','',$attributes_input);
echo '</div>';
echo '</div>';

echo '<div class="form-group">';
echo form_label('ID do Automóvel','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('TB_AUTOMOVEL_ID','',$attributes_input);
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
