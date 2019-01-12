<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{

  protected $table  = 'equipments';

  public $guarded = array(
    'created_at',
    'updated_at',
  );


}
