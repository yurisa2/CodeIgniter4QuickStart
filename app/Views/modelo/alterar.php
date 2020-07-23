<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>
<?php

    /**
     * Controle da TB_MODELO PW3
     *
     * @category   Controle da TB_MODELO
     * @package    PW3
     * @author     HELITON MARTINS DE LIMA <helitonmartinsdelima@gmail.com>
     * @version    0.1
     */

   $attributes_label = ['class' => 'col-sm-3 control-label no-padding-right'];
   $attributes_input = ['class' => 'col-xs-10 col-sm-5'];

    helper('form');

    echo form_open('Modelo/update_modelo');

echo '<div class="form-group">';
    echo form_label('ID: ','',$attributes_label);
        echo '<div class="col-sm-9">';
    echo form_input('TB_MODELO_ID', $modelo['TB_MODELO_ID'],array_merge($attributes_input, ['readonly' => true]));
    echo '</div>';
    echo '</div>';

echo '<div class="form-group">';
    echo form_label('Nome da Modelo: ','',$attributes_label);
        echo '<div class="col-sm-9">';
    echo form_input('TB_MODELO_DESC', $modelo['TB_MODELO_DESC'],$attributes_input);
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
