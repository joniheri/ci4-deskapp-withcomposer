<?php

namespace App\Controllers;

use App\Models\M_notife;

class ExtraPages extends BaseController
{
  public function index()
  {

    $page = 'Extra Pages';
    $page_sub1 = 'Blank';
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

  public function ContactDirectory()
  {
    $page = 'Extra Pages';
    $page_sub1 = 'Contact Directory';
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

  public function Blog()
  {
    $page = 'Extra Pages';
    $page_sub1 = 'Blog';
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

  public function BlogDetail()
  {
    $page = 'Extra Pages';
    $page_sub1 = 'Blog Detail';
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

  public function Product()
  {
    $page = 'Extra Pages';
    $page_sub1 = 'Product';
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

  public function ProductDetail()
  {
    $page = 'Extra Pages';
    $page_sub1 = 'Product Detail';
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

  public function FAQ()
  {
    $page = 'Extra Pages';
    $page_sub1 = 'FAQ';
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

  public function Profile()
  {
    $page = 'Extra Pages';
    $page_sub1 = 'Profile';
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

  public function Gallery()
  {
    $page = 'Extra Pages';
    $page_sub1 = 'Gallery';
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

  public function PricingTables()
  {
    $page = 'Extra Pages';
    $page_sub1 = 'Pricing Tables';
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
