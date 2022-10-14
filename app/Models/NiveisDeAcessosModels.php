<?php

namespace App\Models;

use CodeIgniter\Model;

class NiveisDeAcessosModels extends Model
{
  protected $table      = 'niveis_de_acessos';

  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;
}
