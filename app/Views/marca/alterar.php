<?= $this->extend('default_template')  // CARREGA O TEMPLATE?>
<?= $this->section('content') // ESCPECIFICA EM QUAL SECTION COLOCA O ABAIXO ?>

<?php

    /**
     * Controle da TB_MARCA PW3
     *
     * @category   Controle da TB_MARCA
     * @package    PW3
     * @author     HELITON MARTINS DE LIMA <helitonmartinsdelima@gmail.com>
     * @version    0.1
     */

    helper('form');

    $attributes = ['class' => 'form-horizontal', 'role' => 'form'];

    echo form_open('Marca/update_marca', $attributes);

    $attributes_label = ['class' => 'col-sm-3 control-label no-padding-right'];
    $attributes_input = ['class' => 'col-xs-10 col-sm-5'];


    echo('<b>ALTERAR DADOS DAS MARCAS</b><br><br>');
echo '<div class="form-group">';
    echo form_label('ID: ','',$attributes_label);
    echo '<div class="col-sm-9">';

    echo form_input('TB_MARCA_ID', $marca['TB_MARCA_ID'],array_merge($attributes_input, ['readonly' => true]));
    echo '</div>';
    echo '</div>';


echo '<div class="form-group">';
    echo form_label('Nome da Marca: ','',$attributes_label);
    echo '<div class="col-sm-9">';

    echo form_input('TB_MARCA_NOME', $marca['TB_MARCA_NOME'],$attributes_input);
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
