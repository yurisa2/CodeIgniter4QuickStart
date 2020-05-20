<?php

/**
 * View Exemplo PW3
 *
 * @category   View CodeIgniter4
 * @package    PW3
 * @author     @yurisa2 <yuri@sa2.com.br>
 * @author     Antonio Marcos <portejunior5050@gmail.com>
 * @author     Bianca Maria <mariabitabianca@gmail.com>
 * @author     Bruno Almeida <4lmeidasilva@gmail.com>
 * @author     Dayane Yoni <dayaneyoni@gmail.com>
 * @author     Lucas Gonçalves <luc.tricolor.silva648@gmail.com>
 * @author     Lucas Gusmao <lucas.gusmao.m@gmail.com>
 * @author     Rafael Rodrigues <>
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */




// Helpers - Formulario- https://codeigniter.com/user_guide/helpers/form_helper.html

helper('form');

echo form_open('locacao/create_locacao');

echo form_label('Tipo de Locação');
echo form_input('TB_LOCACAO_TIPO');
echo '<br>';

echo form_label('Valor');
echo form_input('TB_LOCACAO_VALOR');
echo '<br>';

echo form_label('Data de Início');
echo form_input('TB_LOCACAO_DT_INICIO');
echo '<br>';

echo form_label('Data do Fim');
echo form_input('TB_LOCACAO_DT_FIM');
echo '<br>';

echo form_label('ID do Cliente');
echo form_input('TB_CLIENTE_ID');
echo '<br>';

echo form_label('ID do Funcionário');
echo form_input('TB_FUNCIONARIO_ID');
echo '<br>';

echo form_label('ID do Automóvel');
echo form_input('TB_AUTOMOVEL_ID');
echo '<br>';


echo form_submit('mysubmit', 'Cadastrar');


 ?>
