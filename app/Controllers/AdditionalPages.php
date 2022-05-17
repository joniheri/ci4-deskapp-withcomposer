<?php

namespace App\Controllers;

use App\Models\M_notife;

class AdditionalPages extends BaseController
{
  public function index()
  {

    $page = 'Additional Pages';
    $page_sub1 = 'Video Player';
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

  public function Login()
  {
    $page = 'Additional Pages';
    $page_sub1 = 'Login';
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

  public function ForgotPassword()
  {
    $page = 'Additional Pages';
    $page_sub1 = 'Forgot Password';
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

  public function ResetPassword()
  {
    $page = 'Additional Pages';
    $page_sub1 = 'Reset Password';
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
