<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class ProfileController extends BaseController
{
  private string $_baseUrl = 'Profile/';
  private string $_include = 'include/';

  use ResponseTrait;

  function __construct()
  {
    $this->_usuario = model('UsuariosModels');
    helper('utils');
  }

  function index()
  {
    $perfil = $this->_usuario
      ->select('usuarios.nome, usuarios.email, usuarios.data_criacao')
      ->select('empresas.razao_social')
      ->select('niveis_de_acessos.nivel_acesso')
      ->join('empresas', 'empresas.id = usuarios.fk_empresa')
      ->join('niveis_de_acessos', 'niveis_de_acessos.id = usuarios.fk_nivel_acesso')
      ->find(session('id'));
    $data = [
      'usuario' => $perfil,
    ];


    echo view($this->_include . 'header');
    echo view($this->_include . 'menu');
    echo view($this->_baseUrl . 'index', $data);
    echo view($this->_include . 'footer');
  }
}
