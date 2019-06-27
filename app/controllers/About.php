<?php

class About extends Controller {
  public function index($name = 'Fadhil', $age = 15) {
    $data['name'] = $name;
    $data['age'] = $age;
    $this->view('templates/header', ['title' => 'About']);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page() {
    $this->view('templates/header', ['title' => 'Pages']);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}