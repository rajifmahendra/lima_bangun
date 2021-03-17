<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table    = 'companies';
    protected $guarded  = '';

//    public function product_with_limit()
//    {
//        return $this->hasMany('App\Models\Products', 'company_id', 'id')
//            ->orderBy('id', 'desc')
//            ->limit(6);
//    }
}
