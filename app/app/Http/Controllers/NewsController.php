<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class NewsController extends Controller{
    public function submit(Request $req){
        $response = Http::post('http://localhost:5000/newsletter', [
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
