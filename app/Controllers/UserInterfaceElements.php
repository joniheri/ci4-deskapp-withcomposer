<?php

namespace App\Controllers;

use App\Models\M_notife;

class UserInterfaceElements extends BaseController
{
  public function index()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Buttons';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/buttons', $data);
    echo view('layout/foot');
  }

  public function cards()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Cards';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/cards', $data);
    echo view('layout/foot');
  }

  public function cards_hover()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Cards Hover';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/cards_hover', $data);
    echo view('layout/foot');
  }

  public function modals()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Modals';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/user_interface_elements_style1', $data);
    echo view('layout/foot');
  }

  public function tabs()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Tabs';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/user_interface_elements_style1', $data);
    echo view('layout/foot');
  }

  public function tooltip()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Tooltip';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/user_interface_elements_style1', $data);
    echo view('layout/foot');
  }

  public function sweet_alert()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Sweet Alert';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/user_interface_elements_style1', $data);
    echo view('layout/foot');
  }

  public function notification()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Notification';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/user_interface_elements_style1', $data);
    echo view('layout/foot');
  }

  public function timeline()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Timeline';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/user_interface_elements_style1', $data);
    echo view('layout/foot');
  }

  public function progressbar()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Progressbar';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/user_interface_elements_style1', $data);
    echo view('layout/foot');
  }

  public function typography()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Typography';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/user_interface_elements_style1', $data);
    echo view('layout/foot');
  }

  public function list_group()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Typography';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/user_interface_elements_style1', $data);
    echo view('layout/foot');
  }

  public function range_slider()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Range Slider';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/user_interface_elements_style1', $data);
    echo view('layout/foot');
  }

  public function carousel()
  {
    $page = 'UI Elements';
    $page_sub1 = 'Carousel';
    $model_notif = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $model_notif->getData(),
    ];

    echo view('layout/head');
    echo view('user_interface_elements/user_interface_elements_style1', $data);
    echo view('layout/foot');
  }
}
