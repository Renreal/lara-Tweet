<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index(){

        $users = [
            [
                'name' => 'Alex',
                'age' => 10 ,
            ]
            ,
            [
                'name'=> 'Dan' ,
                'age' => 25,
            ]
        ];

        return view(
            'dashboard' ,
            [
                'users' => $users
            ]
        );
    }
}
