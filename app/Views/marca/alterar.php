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

    echo form_open('Marca/update_marca');
    
    echo('<b>ALTERAR DADOS DAS MARCAS</b><br><br>');
    echo form_label('ID: ');
    echo form_input('TB_MARCA_ID', $marca['TB_MARCA_ID']);
    echo '<br>';
    
    echo form_label('Nome da Marca: ');
    echo form_input('TB_MARCA_NOME', $marca['TB_MARCA_NOME']);
    echo '<br>';

    echo form_submit('mysubmit', 'Alterar');