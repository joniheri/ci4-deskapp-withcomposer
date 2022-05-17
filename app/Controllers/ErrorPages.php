<?php

namespace App\Controllers;

use App\Models\M_notife;

class ErrorPages extends BaseController
{
  public function index()
  {

    $page = 'Error Pages';
    $page_sub1 = '400';
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

  public function FourZeroZero()
  {
    $page = 'Error Pages';
    $page_sub1 = '403';
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

  public function FourZeroFour()
  {
    $page = 'Error Pages';
    $page_sub1 = '404';
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

  public function FiveZeroZero()
  {
    $page = 'Error Pages';
    $page_sub1 = '500';
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

  public function FiveZeroThree()
  {
    $page = 'Error Pages';
    $page_sub1 = '503';
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
}
