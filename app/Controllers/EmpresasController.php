<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class EmpresasController extends BaseController
{
  private string $_baseUrl = 'Empresas/';
  private string $_include = 'include/';

  use ResponseTrait;

  function __construct()
  {
    $this->_db = model('EmpresasModels');
    $this->_enderecos = model('EnderecosModels');
    $this->_estados = model('EstadosModels');
    helper('utils');
  }

  function index()
  {
    $data = [
      'empresas' => $this->_db->find(),
      'estados' => $this->_estados->find(),
      'titulo' => 'Empresas',
      'js' => view($this->_baseUrl . 'js/main.js'),
    ];

    echo view($this->_include . 'header');
    echo view($this->_include . 'menu');
    echo view($this->_baseUrl . 'index', $data);
    echo view($this->_baseUrl . 'modal/criar', $data);
    echo view($this->_baseUrl . 'modal/editar');
    echo view($this->_include . 'footer', $data);
  }

  function getAll()
  {
    return $this->_db->findAll();
  }

  function criarEmpresa()
  {
    $arr_empresa = $this->request->getPost(['razao_social', 'fundacao', 'email', 'senha']);
    $arr_endereco =  $this->request->getPost(['logradouro', 'numero', 'bairro', 'cidade', 'uf', 'cep']);
    $id_endereco = $this->_enderecos->insert($arr_endereco);
    $arr_empresa['fk_endereco'] = $id_endereco;
    $this->_db->insert($arr_empresa);
    return redirect()->to(site_url('empresas'));
  }

  public function delete($id)
  {
    return $this->respond($this->_db->delete(['id' => $id]), 200);
  }

  public function editar()
  {
    $data = [
      'razao_social' => $_POST['razao_social'],
      'fundacao' => $_POST['fundacao'],
      'email' => $_POST['email'],
      'ativo' => isset($_POST['ativo']) ? 'S' : 'N',
    ];
    $this->_db->update($_POST['id'], $data);
    return redirect()->to(base_url('empresas'));
  }


  public function get_dados(string $id = null)
  {
    return $this->respond($this->_db->find(["id" => $id]), 200);
  }
}
