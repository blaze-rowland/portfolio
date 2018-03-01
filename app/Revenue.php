<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    public function projects() {
      return $this->belongsTo('App\Project', 'revenues_id');
    }
}
