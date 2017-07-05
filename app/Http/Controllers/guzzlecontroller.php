<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  GuzzleHttp\Client;

class guzzlecontroller extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();

// Send an asynchronous request.
        $request = $client ->request('POST', 'http://panya.ai/v1/api/endpoint/873/execute/',[
            'json' =>[
                "data" => [
                    "text" => "my whey"

                ]
            ]
        ]);

        $response_body = json_decode($request->getBody(),true);



       return response()->json($response_body);


    }


}
