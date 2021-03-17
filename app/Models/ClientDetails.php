<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientDetails extends Model
{
    protected $table    = 'client_details';
    protected $guarded  = '';

    public function clients(){
        return $this->hasMany('App\Models\Clients','id','clients_id');
    }
}
