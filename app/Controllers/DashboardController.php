<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
  private string $_baseUrl = 'Dashboard/';
  private string $_include = 'include/';
  function __construct()
  {
    $this->_usuarios = model('UsuariosModels');
    $this->_empresas = model('UsuariosModels');
    $this->_clientes = model('ClientesModels');
    helper('utils');
  }

  public function index()
  {
    $data = [
      "js" => View($this->_baseUrl . 'js/main.js'),
      "usuarios" => $this->_usuarios->find(),
      "empresas" => $this->_empresas->find(),
      "clientes" => $this->_clientes->find(),
    ];
    echo view($this->_include . 'header');
    echo view($this->_include . 'menu');
    echo view($this->_baseUrl . 'index', $data);
    echo view($this->_include . 'footer');
  }
}
