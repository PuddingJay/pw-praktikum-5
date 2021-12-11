<?php

namespace App\Controllers;



class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WinduAji'
        ];

        echo view('template/header', $data);
        echo view('Pages/Home');
    }
}
