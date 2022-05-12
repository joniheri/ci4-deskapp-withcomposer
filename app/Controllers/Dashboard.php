<?php

namespace App\Controllers;

use App\Models\M_notife;

class Dashboard extends BaseController
{
  public function index()
  {

    $page = 'Home';
    $page_sub1 = 'Dashboard style 1';
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

  public function dashboard_style2()
  {
    $page = 'Home';
    $page_sub1 = 'Dashboard style 2';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),

    ];

    echo view('layout/head');
    echo view('dashboard/dashboard_style2', $data);
    echo view('layout/foot');
  }

  public function dashboard_style3()
  {
    $page = 'Home';
    $page_sub1 = 'Dashboard style 3';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),

    ];

    echo view('layout/head');
    echo view('dashboard/dashboard_style3', $data);
    echo view('layout/foot');
  }
}
