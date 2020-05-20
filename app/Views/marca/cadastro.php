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

    echo form_open('Marca/create_marca');

    echo('<b>CADASTRO DE MARCAS</b><br><br>');

    echo form_label('Nome da Marca: ');
    echo form_input('TB_MARCA_NOME');
    echo '<br>';

    echo form_submit('mysubmit', 'Cadastrar');
     ?>