<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function ShowArray(){
        $user = [
            'firstName' => 'Janusz',
            'lastName' => 'Jankowski',
            'city' => 'Poznan',
            'hobby' => ['zuzel', 'siatkowka', 'golf'],
        ];
        return view('user.Show_user', ['user' => $user]);
    }

}
