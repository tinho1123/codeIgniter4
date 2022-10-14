<?php

namespace App\Controllers;

use App\Models\UsuariosModels;
use CodeIgniter\API\ResponseTrait;

class UsuariosController extends BaseController
{
  private string $_baseUrl = 'Usuarios/';
  use ResponseTrait;

  function __construct()
  {
    $this->_db = new UsuariosModels();
    $this->_empresas = new EmpresasController();
    $this->_niveis_acessos = new NiveisDeAcessosController();
    helper('utils');
  }

  public function index()
  {

    $this->_db
      ->select('usuarios.*, empresas.razao_social, niveis_de_acessos.nivel_acesso')
      ->join('empresas', 'usuarios.fk_empresa = empresas.id')
      ->join('niveis_de_acessos', 'usuarios.fk_nivel_acesso = niveis_de_acessos.id');
    $data = [
      "usuarios" => $this->_db->find(),
      "empresas" => $this->_empresas->getAll(),
      "niveis_acessos" => $this->_niveis_acessos->getAll(),
      "titulo" => 'Usuarios',
      'js' => view($this->_baseUrl . 'js/main.js'),
    ];

    echo view('include/header');
    echo view($this->_baseUrl . "index", $data);
    echo view($this->_baseUrl . 'modal/criar');
    echo view($this->_baseUrl . 'modal/editar', $data);
    echo view('include/footer', $data);
  }

  function login($arr)
  {
    $algo = $this->_db->where('email', $arr['email'])->first();
    if (isset($algo)) {
      if ($arr['senha'] == $algo['senha']) {
        session()->set([
          'usuario' => $algo['email']
        ]);
      } else {
        return (object) ['type' => 'error', 'message' => 'Senha incorreta'];
      }
    } else {
      return (object) ['type' => 'error', 'message' => 'Usuário não encontrado'];
    };
  }

  function criar()
  {
    $arrUsuario = $this->request->getPost(['nome', 'email', 'senha']);
    $arrUsuario['fk_empresa'] = $_POST['empresa'];
    $arrUsuario['fk_nivel_acesso'] = $_POST['nivel_acesso'];
    $this->_db->insert($arrUsuario);
    return redirect()->to(base_url('usuarios'));
  }

  public function delete($id)
  {

    return $this->respond($this->_db->delete(['id' => $id]), 200);
  }

  public function editar()
  {
    $data = [
      'nome' => $_POST['nome'],
      'email' => $_POST['email'],
      'fk_empresa' => $_POST['empresa'],
      'fk_nivel_acesso' => $_POST['nivel_acesso'],
      'ativo' => isset($_POST['ativo']) ? 'S' : 'N',
    ];
    $this->_db->update($_POST['id'], $data);
    return redirect()->to(base_url('usuarios'));
  }


  public function get_dados(string $id = null)
  {
    return $this->respond($this->_db->find(["id" => $id]), 200);
  }
}
