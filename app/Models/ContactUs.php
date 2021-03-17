<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table    = 'contact_us';
    protected $guarded  = [];

    public function companies(){
        return $this->belongsTo('App\Models\Companies', 'companies_id');
    }

    public function getCheckValidNumberAttribute(){
        $phone      = $this->phone;
        $substr2    = substr($phone,0,2);
        if ( $substr2== '62'){
            return 'valid';
        }else{
            return 'invalid';
        }
    }
}
