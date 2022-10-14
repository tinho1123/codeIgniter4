<?php

namespace App\Models;

use CodeIgniter\Model;

class EnderecosModels extends Model
{

  protected $table      = 'enderecos';

  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $allowedFields = ['logradouro', 'numero', 'bairro', 'cidade', 'uf', 'cep'];
  protected $returnType     = 'array';

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;
}
