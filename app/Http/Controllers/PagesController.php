<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        $title = 'Start selling online and earn money from home';
        return view('pages.index', compact('title'));
    }

    public function resellerTerms()
    {
        $title = 'Terms and Conditions for Resellers';
        return view('pages.reseller.terms', compact('title'));
    }

    public function resellerPrivacy()
    {
        $title = 'Resellers Privacy Policy';
        return view('pages.reseller.terms', compact('title'));
    }

    public function contactUs()
    {
        $title = 'Contact us';
        return view('pages.contact', compact('title'));
    }
    public function contactUsPost()
    {
        return 'We got your message and will get back to you soon';
    }
}
