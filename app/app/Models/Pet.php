<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    const TYPE = [
      'DOG'   => 'いぬ',
      'CAT'   => 'ねこ',
      'OTHER' => 'その他'
    ];

    const BREED = [
        'DOG' => [
          'SHIBA'  => '柴犬',
          'CORGI'  => 'コーギー',
          'POME'   => 'ポメラニアン',
        ],
        'CAT' => [
          'AMESHO' => 'アメリカンショートヘア',
          'SCOT'   => 'スコティッシュフォールド',
          'MIKE'   => '三毛猫'
        ]
    ];
}
