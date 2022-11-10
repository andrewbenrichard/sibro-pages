<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilotController extends Controller
{



    public function guide()
    {
        $title = 'Resellers Guide';
        return view('pages.reseller.terms', compact('title'));
    }
}
