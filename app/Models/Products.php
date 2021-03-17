<?php

namespace App\Models;

use App\Http\ToolsRepository\ToolsRepository;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $appends = ['file_contents'];

    public function product_category()
    {
        return $this->hasOne('App\Models\ProductCategories', 'id', 'category_id');
    }

    public function getFileContentsAttribute()
    {
        $tools = new ToolsRepository();
        if (!$this->media_link){
            return $tools->getContents($this->image, $this);
        }
        return $this->media_link;
    }
}
