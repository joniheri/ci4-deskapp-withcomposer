<?php

namespace App\Controllers;

use App\Models\M_notife;

class Calender extends BaseController
{
  public function index()
  {

    $page = 'Calender';
    $page_sub1 = '';
    $model_notif = new M_notife();

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
