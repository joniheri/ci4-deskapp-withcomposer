<?php

namespace App\Controllers;

use App\Models\M_notife;

class MultiLevelMenu extends BaseController
{
  public function index()
  {

    $page = 'Multi Level Menu';
    $page_sub1 = 'Level 1 Sub 1';
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

  public function LeveOneSubTwo()
  {
    $page = 'Multi Level Menu';
    $page_sub1 = 'Level 1 Sub 2';
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

  public function LeveOneSubThree()
  {
    $page = 'Multi Level Menu';
    $page_sub1 = 'Level 1 Sub 3';
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

  public function LeveTwoSubOne()
  {
    $page = 'Multi Level Menu';
    $page_sub1 = 'Level 2';
    $page_sub2 = 'Level 2 Sub 1';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'page_sub2' => $page_sub2,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('dashboard/dashboard_style2', $data);
    echo view('layout/foot');
  }

  public function LeveTwoSubTwo()
  {
    $page = 'Multi Level Menu';
    $page_sub1 = 'Level 2';
    $page_sub2 = 'Level 2 Sub 2';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'page_sub2' => $page_sub2,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('dashboard/dashboard_style2', $data);
    echo view('layout/foot');
  }
}
