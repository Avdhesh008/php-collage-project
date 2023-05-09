<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ArtisanController extends Controller
{
    
    public function show($command)
    {
        \Artisan::call($command);
        dd("done");
    }

    public function index()
    {
        \Artisan::call('cache:clear');
        \Artisan::call('config:clear');
        \Artisan::call('config:cache');
        \Artisan::call('view:clear');
        return 'Cleared!';
    }
}