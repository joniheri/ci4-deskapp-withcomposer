<?php

namespace App\Models;

use CodeIgniter\Model;

class M_notife extends Model
{
  public function getData()
  {
    $dataNotife = [
      [
        'id' => '1',
        'img' => 'vendors/images/img.jpg',
        'name_user' => 'John Doe',
        'message' => 'John Doe : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...',
      ],
      [
        'id' => '2',
        'img' => 'vendors/images/photo1.jpg',
        'name_user' => 'Lea R. Frith',
        'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...',
      ],
      [
        'id' => '3',
        'img' => 'vendors/images/photo2.jpg',
        'name_user' => 'Erik L. Richards',
        'message' => 'Erik L. Richards : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...',
      ],
      [
        'id' => '4',
        'img' => 'vendors/images/photo3.jpg',
        'name_user' => 'Renee I. Hansen',
        'message' => 'Renee I. Hansen : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...',
      ],
      [
        'id' => '5',
        'img' => 'vendors/images/photo4.jpg',
        'name_user' => 'Vicki M. Coleman',
        'message' => 'Vicki M. Coleman : Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...',
      ],
    ];

    return $dataNotife;
  }
}
