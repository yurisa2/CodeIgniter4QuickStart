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

echo form_open('automovel/create_automovel');

echo form_label('Nome do Veiculo');
echo form_input('TB_AUTOMOVEL_NOME');
echo '<br>';

echo form_label('Ano');
echo form_input('TB_AUTOMOVEL_ANO_FAB');
echo '<br>';

echo form_label('Cor');
echo form_input('TB_AUTOMOVEL_COR');
echo '<br>';

echo form_label('KM');
echo form_input('TB_AUTOMOVEL_KM');
echo '<br>';

echo form_label('Valor D');
echo form_input('TB_AUTOMOVEL_VALOR_D');
echo '<br>';

echo form_label('Status');
echo form_input('TB_AUTOMOVEL_STATUS');
echo '<br>';

echo form_label('Marca');
echo form_dropdown('TB_MARCA_ID', $marca);
echo '<br>';

echo form_label('Modelo');
echo form_input('TB_MODELO_ID');
echo '<br>';

echo form_submit('mysubmit', 'Submit Post!');


 ?>
