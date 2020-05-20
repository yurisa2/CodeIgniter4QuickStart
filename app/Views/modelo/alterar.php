<?php

    /**
     * Controle da TB_MODELO PW3
     *
     * @category   Controle da TB_MODELO
     * @package    PW3
     * @author     HELITON MARTINS DE LIMA <helitonmartinsdelima@gmail.com> 
     * @version    0.1
     */

    helper('form');

    echo form_open('Modelo/update_modelo');
    
    echo('<b>ALTERAR DADOS DOS MODELOS</b><br><br>');
    echo form_label('ID: ');
    echo form_input('TB_MODELO_ID', $modelo['TB_MODELO_ID']);
    echo '<br>';
    
    echo form_label('Nome da Modelo: ');
    echo form_input('TB_MODELO_DESC', $modelo['TB_MODELO_DESC']);
    echo '<br>';

    echo form_submit('mysubmit', 'Alterar');