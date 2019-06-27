<?php

class Mahasiswa extends Controller {
  public function index() {
    $this->view('templates/header', ['title' => 'Daftar Mahasiswa']);
    $this->view('mahasiswa/index', ['mhs' => $this->model('Mahasiswa_model')->getAllMahasiswa()]);
    $this->view('templates/footer');
  }
}