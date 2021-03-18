<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class SearchApiController extends Controller
{
    function index()
    {
        // $client = new \GuzzleHttp\Client();

        // $request = $client->get('https://reqres.in/api/users?page=1');

        // $response = $request->getBody();

        // $data = json_decode($response);

        // dd($data);

        $client = new Client(['base_uri' => 'https://reqres.in/']);

        $response = $client->request('GET', '/api/users?page=1');
                
        $data = $response->getBody();
        $clientes = json_decode($data, true);

        return view('searchapi', ['data' => $clientes['data']]);
    }
}
