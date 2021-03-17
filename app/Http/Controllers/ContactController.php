<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contact');
    }

    public function store(Request $request){
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => env('MBS_URL').'/api/contact-us',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($request->all()),
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            return redirect('/home')->with('message', $response);
        }catch (\Exception $e){
            return back()->with('message', $e->getMessage());
        }
    }
}
