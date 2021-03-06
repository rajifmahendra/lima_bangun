<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Companies;
use App\Models\Contents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    public function index()
    {
        $url = URL::to('/');
        $companies = Companies::with([])->where('web_url', $url)->first();
        if (!$companies) {
            return response('domain is not registered');
        }
        $aboutContents = [];
        $contents   = Contents::with([])->where('companies_id', $companies->id)->where('section', env('BASE_SECTION') . '_about')->get();
        foreach ($contents as $content) {
            switch ($content['content_name']) {
                case 'about_description':
                    $aboutContents['about_description'] = $content['content'];
                    break;
            }
        }
        return view('pages.index', compact('aboutContents'));
    }
}
