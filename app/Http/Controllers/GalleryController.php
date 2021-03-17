<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Contents;
use Illuminate\Support\Facades\URL;

class GalleryController extends Controller
{
    public function index(){
        $url = URL::to('/');
        $companies = Companies::with([])->where('web_url', $url)->first();
        if (!$companies) {
            return response('domain is not registered');
        }
        $contents = Contents::with([])
            ->where('companies_id', $companies->id)
            ->where('section', env('BASE_SECTION') . '_gallery')
            ->get();
        return view('pages.gallery', compact('contents'));
    }
}
