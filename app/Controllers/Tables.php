<?php

namespace App\Controllers;

use App\Models\M_notife;

class Tables extends BaseController
{
  public function index()
  {

    $page = 'Tables';
    $page_sub1 = 'Basic Tables';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),

    ];

    echo view('layout/head');
    echo view('tables/basic_tables', $data);
    echo view('layout/foot');
  }

  public function data_tables()
  {
    $page = 'Tables';
    $page_sub1 = 'Data Tables';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),

    ];

    echo view('layout/head');
    echo view('tables/data_tables', $data);
    echo view('layout/foot');
  }
}
