<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilotController extends Controller
{



    public function guide()
    {
        $title = 'Sibro Pilot ';
        return view('pilot.index', compact('title'));
    }
}
