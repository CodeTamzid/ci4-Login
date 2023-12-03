<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => "Deni Rudini"
    ];
    return view('pages/home', $data);
  }
  public function about($nama = 'Deni Rudini', $umur = 21)
  {
    $data = [
      'title' => "About Me",
      'nama' => $nama,
      'umur' => $umur
    ];
    return view('pages/about', $data);
  }
  public function contact()
  {
    $data = [
      'title' => "Contact Us",
      'alamat' => [
        [
          'tipe' => 'Rumah',
          'alamat' => 'kp Cihaneut Rt/Rw 003/011',
          'kota' => 'Bandung Selatan'
        ],
        [
          'tipe' => 'Universitas Pasundan',
          'alamat' => 'Jl. Dr Setiabudi No.193',
          'kota' => 'Bandung'
        ]
      ]
    ];
    return view('pages/contact', $data);
  }
}
