<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table    = 'pages';
    protected $guarded  = [];

    public function companies(){
        return $this->belongsTo('App\Models\Companies', 'companies_id');
    }
}
