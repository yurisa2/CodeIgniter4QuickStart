<?php
/**
 * Form Cadastro da TB_CLIENTE PW3
 *
 * @category   Form Cadastro da TB_CLIENTE
 * @package    PW3
 * @author     MATHEUS SOUZA FERRO <matheussouzaferro@gmail.com> 
 * @author     AMANDA BATISTA <amandabocardoso0@gmail.com> 
 * @author     VICTOR HENRIQUE <victor.ti.henrique@gmail.com>
 * @version    0.1
 */
helper('form');

echo form_open('Cliente/create_cliente');


echo('<b>CADASTRO DE CLIENTES</b><br><br>');

echo form_label('Nome do Cliente: ');
echo form_input('TB_CLIENTE_NOME');
echo '<br>';

echo form_label('Telefone: ');
echo form_input('TB_CLIENTE_TEL');
echo '<br>';

echo form_label('Sexo: ');
echo form_input('TB_CLIENTE_SEXO');
echo '<br>';

echo form_label('Email: ');
echo form_input('TB_CLIENTE_EMAIL');
echo '<br>';

echo form_label('Senha: ');
echo form_input('TB_CLIENTE_SENHA');
echo '<br>';

echo form_label('Endereco: ');
echo form_input('TB_CLIENTE_ENDERECO');
echo '<br>';

echo form_label('Complemento: ');
echo form_input('TB_CLIENTE_COMPLEMENTO');
echo '<br>';

echo form_label('Bairro: ');
echo form_input('TB_CLIENTE_BAIRRO');
echo '<br>';

echo form_label('Cidade: ');
echo form_input('TB_CLIENTE_CIDADE');
echo '<br>';

echo form_label('Uf: ');
echo form_input('TB_CLIENTE_UF');
echo '<br>';

echo form_label('Data de nascimento: ');
echo form_input('TB_CLIENTE_DT_NASC');
echo '<br>';

echo form_label('Data cadastro: ');
echo form_input('TB_CLIENTE_DT_CAD');
echo '<br>';
echo form_submit('mysubmit', 'Cadastrar');
                                