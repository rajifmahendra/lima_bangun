<?php

namespace App\Models;

use App\Http\ToolsRepository\ToolsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Clients extends Model
{
    protected $table    = 'clients';
    protected $guarded  = '';

    public function getFileAttribute(){
        return $this->media_link;
    }

    public function client_details(){
        return $this->hasMany('App\Models\ClientDetails','clients_id','id');
    }
}
