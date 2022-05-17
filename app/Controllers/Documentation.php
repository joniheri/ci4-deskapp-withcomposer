<?php

namespace App\Controllers;

use App\Models\M_notife;

class Documentation extends BaseController
{
  public function index()
  {
    $model_notif = new M_notife();
    $page = 'Documentation';
    $page_sub1 = 'Introduction';

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('dashboard/dashboard_style1', $data);
    echo view('layout/foot');
  }

  public function GettingStarted()
  {
    $model_notif = new M_notife();
    $page = 'Documentation';
    $page_sub1 = 'Getting Started';

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('dashboard/dashboard_style1', $data);
    echo view('layout/foot');
  }

  public function ColorSettings()
  {
    $model_notif = new M_notife();
    $page = 'Documentation';
    $page_sub1 = 'Color Settings';

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('dashboard/dashboard_style1', $data);
    echo view('layout/foot');
  }

  public function ThirdPartyPlugins()
  {
    $model_notif = new M_notife();
    $page = 'Documentation';
    $page_sub1 = 'Third Party Plugins';

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
