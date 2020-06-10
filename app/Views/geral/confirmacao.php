<?php
/**
 * View Confirmacao PW3
 *
 * @category   View CodeIgniter4
 * @package    PW3
 * @author     Yuri sá
 * @author     @yurisa2
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */


echo $titulo;
echo '<br>';
echo $msg;
echo '<br>';
echo $destino;
echo '<br>';




helper('form');

echo form_open($destino);

echo form_label('ID');
echo form_input('TB_AUTOMOVEL_ID', $automovel['TB_AUTOMOVEL_ID'], ["readonly" => "readonly"]);
echo '<br>';

echo form_label('Nome do Veiculo');
echo form_input('TB_AUTOMOVEL_NOME', $automovel['TB_AUTOMOVEL_NOME'], ["readonly" => "readonly"]);
echo '<br>';

echo form_label('Ano');
echo form_input('TB_AUTOMOVEL_ANO_FAB', $automovel['TB_AUTOMOVEL_ANO_FAB'], ["readonly" => "readonly"]);
echo '<br>';

echo form_label('Cor');
echo form_input('TB_AUTOMOVEL_COR', $automovel['TB_AUTOMOVEL_COR'], ["readonly" => "readonly"]);
echo '<br>';

echo form_label('KM');
echo form_input('TB_AUTOMOVEL_KM', $automovel['TB_AUTOMOVEL_KM'], ["readonly" => "readonly"]);
echo '<br>';

echo form_label('Valor D');
echo form_input('TB_AUTOMOVEL_VALOR_D', $automovel['TB_AUTOMOVEL_VALOR_D'], ["readonly" => "readonly"]);
echo '<br>';

echo form_label('Status');
echo form_input('TB_AUTOMOVEL_STATUS', $automovel['TB_AUTOMOVEL_STATUS'], ["readonly" => "readonly"]);
echo '<br>';

echo form_label('Marca');
echo form_input('TB_MARCA_ID', $automovel['TB_MARCA_ID'], ["readonly" => "readonly" ]); // COMO ERA ANTIGAMEN, '"readonly" => "readonly"]TE

echo '<br>';

echo form_label('Modelo');
echo form_input('TB_MODELO_ID', $automovel['TB_MODELO_ID'], ["readonly" => "readonly"]);
echo '<br>';

echo form_submit('mysubmit', 'Submit Post!');


 ?>
