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

  public function tambah() {
    if ($this->model('Mahasiswa_model')->tambahMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambah', 'success');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambah', 'danger');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }

  public function hapus($id) {
    if ($this->model('Mahasiswa_model')->hapusMahasiswa($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }
}