<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $primaryKey='i_id';
    protected $guarded=['i_id'];
}
