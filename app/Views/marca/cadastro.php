<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php

    /**
     * Cadastro da TB_MARCA PW3
     *
     * @category   Form Cadastro da TB_MARCA
     * @package    PW3
     * @author     HELITON MARTINS DE LIMA <helitonmartinsdelima@gmail.com>
     * @version    0.1
     */

    helper('form');

    $attributes = ['class' => 'form-horizontal', 'role' => 'form'];
    echo form_open('Marca/create_marca', $attributes);

    $attributes_label = ['class' => 'col-sm-3 control-label no-padding-right'];
    $attributes_input = ['class' => 'col-xs-10 col-sm-5'];

    echo('<b>CADASTRO DE MARCAS</b><br><br>');

    echo '<div class="form-group">';
    echo form_label('Nome da Marca: ','label',$attributes_label);
    echo '<div class="col-sm-9">';
    echo form_input('TB_MARCA_NOME','',$attributes_input);
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
