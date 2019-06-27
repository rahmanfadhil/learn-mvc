<?php

class Mahasiswa extends Controller {
  public function index() {
    $this->view('templates/header', ['title' => 'Daftar Mahasiswa']);
    $this->view('mahasiswa/index', ['mhs' => $this->model('Mahasiswa_model')->getAllMahasiswa()]);
    $this->view('templates/footer');
  }

  public function detail($id) {
    $this->view('templates/header', ['title' => 'Daftar Mahasiswa']);
    $this->view('mahasiswa/detail', ['mhs' => $this->model('Mahasiswa_model')->getMahasiswaById($id)]);
    $this->view('templates/footer');
  }
}