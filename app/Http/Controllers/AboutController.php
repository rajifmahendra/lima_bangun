<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Companies;
use App\Models\Contents;
use Illuminate\Support\Facades\URL;

class AboutController extends Controller
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
        $clients    =  Clients::with(['client_details'])->where('companies_id', $companies->id)->get();
        foreach ($contents as $content) {
            switch ($content['content_name']) {
                case 'about_visi':
                    $aboutContents['about_visi'] = $content['content'];
                break;
                case 'about_misi':
                    $aboutContents['about_misi'] = $content['content'];
                break;
                case 'about_description':
                    $aboutContents['about_description'] = $content['content'];
                break;
                case 'about_direksi':
                    $aboutContents['about_direksi'] = $content['content'];
                break;
            }
        }
        return view('pages.about', compact('aboutContents', 'clients'));
    }
}
