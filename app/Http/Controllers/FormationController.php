<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function testFormation()
    {
        return view("formation");
    }
}
