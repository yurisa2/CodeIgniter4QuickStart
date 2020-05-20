<?php

/**
 * View Exemplo PW3
 *
 * @category   View CodeIgniter4
 * @package    PW3
 * @author     Gabriel da Silva 
 * @author     Daniel
 * @author     Luigi
 * @author     Leandro
 * @author     Valérya
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */




// Helpers - Formulario- https://codeigniter.com/user_guide/helpers/form_helper.html

helper('form');

echo form_open('funcionario/create_funcionario');

echo form_label('Nome do Funcionario ');
echo form_input('TB_FUNCIONARIO_NOME');
echo '<br>';

echo form_label('Telefone ');
echo form_input('TB_FUNCIONARIO_TEL');
echo '<br>';

echo form_label('Data Contrato ');
echo form_input('TB_FUNCIONARIO_DT_CONTRATO');
echo '<br>';

echo form_label('Cargo ');
echo form_input('TB_CARGO_ID');
echo '<br>';

echo form_submit('mysubmit', 'Submit Post!');


 ?>