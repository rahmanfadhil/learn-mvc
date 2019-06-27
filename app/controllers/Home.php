<?php

class Home extends Controller {
  public function index() {
    $user = $this->model('User_model')->getUser();

    $this->view('templates/header', ['title' => 'Home']);
    $this->view('home/index', ['user' => $user]);
    $this->view('templates/footer');
  }
}