<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $table = 'projects';

    public $primaryKey = 'id';
    public $timestamps = true;

    public function clients() {
      return $this->belongsTo('App\Client');
    }

    public function revenue() {
      return $this->hasMany('App\Revenue', 'project_id');
    }
}
