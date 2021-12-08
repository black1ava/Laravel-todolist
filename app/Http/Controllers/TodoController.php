<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public static function index(){
        return 'Todo index';
    }

    public function create(){
        return 'Todo create';
    }
}
