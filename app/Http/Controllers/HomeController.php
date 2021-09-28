<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Carbon\Carbon;
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

    public function date()
    {
        return view('tow_date');
    }

    public function date_store(Request $request)
    {
        $start_date = Carbon::parse($request->start_date)
                             ->toDateTimeString();

       $end_date = Carbon::parse($request->end_date)
                             ->toDateTimeString();

       return Todo::whereBetween('created_at',[$start_date,$end_date])->get();
    }

}