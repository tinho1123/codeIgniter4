<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpresasModels extends Model
{
  protected $table      = 'empresas';

  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $allowedFields = ['razao_social', 'fundacao', 'email', 'fk_endereco', 'ativo'];

  protected $returnType     = 'array';

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;
}
