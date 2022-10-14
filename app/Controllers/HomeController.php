<?php

namespace App\Controllers;

class HomeController extends BaseController
{
  private string $_baseUrl = 'Home/';

  public function index()
  {
    echo view('include/header');
    echo view($this->_baseUrl . 'index');
    echo view('include/footer');
  }
}
