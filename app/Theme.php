<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $primaryKey ='t_id';
   protected $guarded=['t_id'];
}
