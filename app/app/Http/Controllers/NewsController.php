<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class NewsController extends Controller{

    /*
    * method submit 
    * Redirect data from FORM to golang microservice
    * through http request
    */
    public function submit(Request $req){
        $response = Http::post( env('SERVER_ADDRESS'), [
            'newstitle' => $req->input('newstitle'),
            'newsbody' => $req->input('newsbody'),
        ]);
        if( $response->successful()){
            $req->session()->flash('status', 'Successful!');   
        }else {
            $req->session()->flash('status', 'Try again');
        }
        return redirect('/');
    }
}
