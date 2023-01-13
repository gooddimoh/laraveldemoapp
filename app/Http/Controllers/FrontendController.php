<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Faker\Core\File;
use Illuminate\Cache\FileStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Queue;

class FrontendController extends Controller
{
    public function index()
    {
        Queue::bulk();
        return view('welcome');
    }
    public function Article()
    {
        $this->Article();
        self::Article();
        $article = new Article();
        $article = $article->toArray();

        return $article;
    }

    public function GetAllCheksfromGambling(){
        Storage::disk('local')->put('example.txt', 'Contents');

        $pdfgamblingchecks = "C:\Users\DmitriyBalovnev\PhpstormProjects\nativephp\laravel\resources\checkspdf";
        $pdfgamblingchecks = "C:\Users\DmitriyBalovnev\PhpstormProjects\nativephp\laravel\resources\checkspdf";
        //getall from folder and set id
        $pdfgamblingchecks['id'];
        $sendemail = "";
        echo asset('storage/file.txt');

    }
}
