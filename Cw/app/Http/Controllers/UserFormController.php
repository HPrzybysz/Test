<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function showUser(Request $req){
        //return $req->input();
        //return $req->input('firstName');
        //return $req ->  path();

        $dataUser = [
            'firstName' => $req->input('firstName'),
            'lastName' => $req->input('lastName')
        ];

        return view('user', ['user' => $dataUser]);

    }
}
