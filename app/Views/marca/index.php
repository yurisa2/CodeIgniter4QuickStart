<?php 

    /**
     * Index da TB_MARCA PW3
     *
     * @category   Form Cadastro da TB_MARCA
     * @package    PW3
     * @author     HELITON MARTINS DE LIMA <helitonmartinsdelima@gmail.com> 
     * @version    0.1
     */

$tabela = new \CodeIgniter\View\Table();

$tabela->setHeading('TB_MARCA_ID', 'TB_MARCA_NOME', 'Alterar', 'Excluir');

echo $tabela->generate($marca);

?>