<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function universidad()
    {
      return $this->belongsTo('App\Universidad', 'universidad_id');
    }
}
