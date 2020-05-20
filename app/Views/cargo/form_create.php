<?php

/**
 * View Exemplo PW3
 *
 * @category   View CodeIgniter4
 * @package    PW3
 * @author     @yurisa2 <yuri@sa2.com.br>
 * @author     Another Author <another@example.com>
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */




// Helpers - Formulario- https://codeigniter.com/user_guide/helpers/form_helper.html

helper('form');

echo form_open('cargo/create_cargo');

echo form_label('Nome do Cargo');
echo form_input('TB_CARGO_NOME');
echo '<br>';

echo form_submit('mysubmit', 'Cadastrar');


?>
