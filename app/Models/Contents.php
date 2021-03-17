<?php

namespace App\Models;

use App\Http\ToolsRepository\ToolsRepository;
use Carbon\Carbon;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Contents extends Model
{
    use Timestamp;
    protected $table    = 'contents';
    protected $guarded  = [];

    public function companies(){
        return $this->belongsTo('App\Models\Companies', 'companies_id');
    }

    public function pages(){
        return $this->belongsTo('App\Models\Pages', 'pages_id');
    }

    public function getSectionPagesAttribute(){
        return str_replace('_', ' ', $this->section());
    }

    public function section(){
        return $this->section;
    }

    public function getFileContentsAttribute(){
        return $this->media_link;
    }
}
