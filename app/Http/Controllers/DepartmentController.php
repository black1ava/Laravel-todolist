<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return 'Department index';
    }

    public function create(){
        return 'Department create';
    }
    
    public function store(){
        return 'Department store';
    }

    public function update(){
        return 'Department update';
    }

    public function edit(){
        return 'Department edit';
    }

    public function show(){
        return 'Department show';
    }

    public function destroy(){
        return 'Department destoy';
    }
}
