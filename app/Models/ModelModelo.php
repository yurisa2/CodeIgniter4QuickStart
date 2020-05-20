<?php 

    /**
     * MODEL da TB_MARCA PW3
     *
     * @category   MODEL
     * @package    PW3
     * @author     HELITON MARTINS DE LIMA <helitonmartinsdelima@gmail.com> 
     * @version    0.1
     */

namespace App\Models;

use CodeIgniter\Model;

class ModelModelo extends Model
{
    protected $table      = 'tb_modelo';
    protected $primaryKey = 'tb_modelo_id';

    protected $returnType     = 'array';

    protected $allowedFields = ['TB_MODELO_DESC'];
    
}