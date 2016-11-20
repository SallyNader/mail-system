<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $primaryKey='c_id';
   protected $guarded=['c_id'];


public function lists(){


	return $this->belongsToMany('App\Lists','contact_list','contact_id','list_id');
}


}
