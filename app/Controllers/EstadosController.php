<?php

namespace App\Controllers;

use App\Models\EstadosModels;

class EstadosController extends BaseController
{
  private string $_baseUrl = 'Estados/';
  private EstadosModels $_db;

  function __construct()
  {
    $this->_db = new EstadosModels();
  }

  function getAll()
  {
    return $this->_db->find();
  }
}
