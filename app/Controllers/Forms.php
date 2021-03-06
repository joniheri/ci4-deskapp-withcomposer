<?php

namespace App\Controllers;

use App\Models\M_notife;

class Forms extends BaseController
{
  public function index()
  {

    $page = 'Forms';
    $page_sub1 = 'Form Basic';
    $dataNotife = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $dataNotife->getData(),

    ];

    echo view('layout/head');
    echo view('forms/form_basic', $data);
    echo view('layout/foot');
  }

  public function advanced_components()
  {

    $page = 'Forms';
    $page_sub1 = 'Advanced Components';
    $dataNotife = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $dataNotife->getData(),

    ];

    echo view('layout/head');
    echo view('forms/advanced_component', $data);
    echo view('layout/foot');
  }

  public function form_wizard()
  {

    $page = 'Forms';
    $page_sub1 = 'Form Wizard';
    $dataNotife = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $dataNotife->getData(),

    ];

    echo view('layout/head');
    echo view('forms/form_wizard', $data);
    echo view('layout/foot');
  }

  public function html5_editor()
  {

    $page = 'Forms';
    $page_sub1 = 'HTML5 Editor';
    $dataNotife = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $dataNotife->getData(),

    ];

    echo view('layout/head');
    echo view('forms/html5_editor', $data);
    echo view('layout/foot');
  }

  public function form_pickers()
  {

    $page = 'Forms';
    $page_sub1 = 'Form Pickers';
    $dataNotife = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $dataNotife->getData(),

    ];

    echo view('layout/head');
    echo view('forms/form_pickers', $data);
    echo view('layout/foot');
  }

  public function image_croppers()
  {

    $page = 'Forms';
    $page_sub1 = 'Image Croppers';
    $dataNotife = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $dataNotife->getData(),

    ];

    echo view('layout/head');
    echo view('forms/image_croppers', $data);
    echo view('layout/foot');
  }

  public function image_dropzone()
  {

    $page = 'Forms';
    $page_sub1 = 'Image Dropzone';
    $dataNotife = new M_notife();

    $data = [
      'page' => $page,
      'page_sub1' => $page_sub1,
      'dataNotife' =>  $dataNotife->getData(),

    ];

    echo view('layout/head');
    echo view('forms/image_dropzone', $data);
    echo view('layout/foot');
  }
}
