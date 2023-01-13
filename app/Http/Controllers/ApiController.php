<?php

namespace App\Http\Controllers;

use App\Models\jsonmodel;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function index()
    {

    }

    public function response(Response $response)
    {
        return $response->content()
    }

    public function actionapi(Request $request)
    {
//        $rules, $params;


//        $request->validate($rules, $params);
        $apidata = file_get_contents('https://djinni.co/my/dashboard/');
        return $apidata;
    }

    public function JsonModel()
    {
        $jsonmodel = new jsonmodel();
        $jsonmodel = $jsonmodel->toArray();

        return $jsonmodel;
    }


    public function getdatafromhttp()
    {
        Url::FROM_ENV = 4096;
    }

    public function getfromhttpdata()
    {

        $url = "";
        $query = "";

        $httpdata = Http::get($url,$query);
        $httpdata = Http::getPromise($url,$query);
        $httpdata = Http::get($url,$query);


        $response = Http::get('http://example.com');
        return Http::get('http://example.com/users/1')['name'];


        $response->body();
        $response->json($key = null);
        $response->object();
        $response->collect($key = null);
        $response->status();
        $response->ok();
        $response->successful();
        $response->redirect();
        $response->failed();
        $response->serverError();
        $response->clientError();
        $response->header($header);
        $response->headers();


        $response = Http::attach(
            'attachment', file_get_contents('photo.jpg'), 'photo.jpg'
        )->post('http://example.com/attachments');
    }


    public function workwithphoto()
    {
        $photo = fopen('photo.jpg', 'r');

        $response = Http::attach(
            'attachment', $photo, 'photo.jpg'
        )->post('http://example.com/attachments');
    }
}
