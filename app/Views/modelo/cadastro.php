<?php 

    /**
     * Cadastro da TB_MODELO PW3
     *
     * @category   Form Cadastro da TB_MPODELO
     * @package    PW3
     * @author     HELITON MARTINS DE LIMA <helitonmartinsdelima@gmail.com> 
     * @version    0.1
     */

    helper('form');

    echo form_open('Modelo/create_modelo');

    echo('<b>CADASTRO DE MODELOS</b><br><br>');

    echo form_label('Desc do Modelo: ');
    echo form_input('TB_MODELO_DESC');
    echo '<br>';

    echo form_submit('mysubmit', 'Cadastrar');
     ?>