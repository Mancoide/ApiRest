<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client as Guzzle;

use Illuminate\Http\Request;

class ApiRestController extends Controller
{
    public function index()
    {
        //OBTENER POSTS
        $guzzle = new Guzzle();
        $fetch = $guzzle->request('GET', 'https://jsonplaceholder.typicode.com/posts');

        $response = json_decode($fetch->getBody());

        return view('api-rest', compact('response'));
    }
}
