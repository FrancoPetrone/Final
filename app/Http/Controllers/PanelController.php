<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function menu(){
        return view('panel.menu');
    }
}
