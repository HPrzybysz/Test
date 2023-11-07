<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show(){
        return 'Kontroler FormController';
    }

    public function  showFirstName(){
        $data = [
            'firstName' => 'Janusz',
            'lastName' => 'Jankowski',
            'city' => 'Poznan',
            'age' => '22',
        ];
        return view('data', $data);
    }
}
