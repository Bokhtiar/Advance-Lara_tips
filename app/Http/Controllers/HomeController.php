<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class HomeController extends Controller
{
    public function getData(){
       $response = Curl::to('https://example.com/posts/1')

                ->withData(['title'=>'Test', 'body'=>'sdsd', 'userId'=>1])

                ->put();

    dd($response);
    }

}