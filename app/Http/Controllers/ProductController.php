<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Contents;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
{
    public function index(){
        $url = URL::to('/');
        $companies = Companies::with([])->where('web_url', $url)->first();
        if (!$companies) {
            return response('domain is not registered');
        }
        $contents = Products::with([])->where('company_id', $companies->id)->get();
        return view('pages.product', compact('contents'));
    }

    public function detail($id){
        $url = URL::to('/');
        $companies = Companies::with([])->where('web_url', $url)->first();
        if (!$companies) {
            return response('domain is not registered');
        }
        $contents = Products::with(['product_category'])->where('company_id', $companies->id)->where('id', $id)->first();
        return view('pages.product-detail',compact('contents'));
    }
}
