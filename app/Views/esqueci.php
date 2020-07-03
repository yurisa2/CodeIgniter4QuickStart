<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>


<?php




helper('form');

$attributes = ['class' => 'form-horizontal', 'role' => 'form'];
echo form_open('login/enviasenha', $attributes);

$attributes_label = ['class' => 'col-sm-3 control-label no-padding-right'];
$attributes_input = ['class' => 'col-xs-10 col-sm-5'];

echo '<div class="form-group">';
echo form_label('Login','label',$attributes_label);
echo '<div class="col-sm-9">';
echo form_input('login','',$attributes_input);
echo '</div>';
echo '</div>';

// echo '<br>';
$attributes_submit = ['class' => "btn btn-info"];

echo '
<div class="clearfix form-actions">
  <div class="col-md-offset-3 col-md-9">';

  echo form_submit($attributes_submit, 'Enviar Senha para email');

echo '
  </div>
</div>';


 ?>

 <?= $this->endSection() // ENCERRA A SECTION?>
