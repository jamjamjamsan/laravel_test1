<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class FormController extends Controller
{
    public function index()
    {
        return view("index");
    }
    
    public function create(Request $request)
    {
        $form = $request->all();
        Form::create($form);
        return view("thanks");
    }
}
