<?php

namespace App\Controllers;

use App\Models\M_notife;

class Invoice extends BaseController
{
  public function index()
  {
    $model_notif = new M_notife();
    $page = 'Invoice';
    $page_sub1 = '';

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('dashboard/dashboard_style1', $data);
    echo view('layout/foot');
  }
}
