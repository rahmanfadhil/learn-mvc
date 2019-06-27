<?php

class Mahasiswa_model {
  private $mhs = [
    [
      'nama' => 'Rahman Fadhil',
      'nrp' => '298347189234',
      'email' => 'rhmnfadhil@gmail.com',
      'jurusan' => 'Teknik Informatika'
    ],
    [
      'nama' => 'Rahman Fadhil',
      'nrp' => '298347189234',
      'email' => 'rhmnfadhil@gmail.com',
      'jurusan' => 'Teknik Informatika'
    ]
  ];

  public function getAllMahasiswa() {
    return $this->mhs;
  }
}