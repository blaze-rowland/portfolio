<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
  // Table name
  protected $table = 'portfolio';

  // Primary key
  public $primaryKey = 'id';

  // Timestamps
  public $timestamps = true;
}
