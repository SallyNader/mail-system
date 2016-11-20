<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    

    protected $primaryKey='l_id';
    protected $guarded=['l_id'];


protected $table='lists';


    public function contacts(){


    	return $this->belongsToMany('App\Contact','contact_list','list_id','contact_id');
    }
}
