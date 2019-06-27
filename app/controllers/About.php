<?php

class About extends Controller {
  public function index($name = 'Fadhil', $age = 15) {
    $data['name'] = $name;
    $data['age'] = $age;
    $this->view('about/index', $data);
  }

  public function page() {
    $this->view('about/page');
  }
}