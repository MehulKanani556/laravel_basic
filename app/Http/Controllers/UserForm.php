<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserForm extends Controller
{
    //
    // function addUser(Request $req){
    //     echo "User Name is $req->username";
    //     echo "<br>";
    //     echo "User Email is $req->email";
    //     echo "<br>";
    //     echo "User City is $req->city";
    //     // return $req;
    // }
    function addUser(Request $req){
        echo $req->gender;
        echo "<br />";
        
        echo $req->city;
        echo "<br />";
        echo $req->age;
        echo "<br />";
        print_r ($req->skill);
      

        // return $req;
    }
}
