<?php

namespace App\Http\Controllers;

class HomeController extends Controller{
    public function index()
    {
        $data = [
            'name' => 'Jahid Hasan',
            'age' =>25,
            'subject'=>[
                'Bangla','English','Math'
            ]
        ];

        return view('home.index',$data);
    }

}

