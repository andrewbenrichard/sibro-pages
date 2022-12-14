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
    public function appRedirect()
    {
        //Detect devices
        $iPod    = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
        $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
        $iPad    = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
        $Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");

        if ($Android) {
            echo 'We are redirecting you to the Android app';
            return redirect('https://play.google.com/store/apps/details?id=com.sibrocommerce.app');
        } else if ($iPod || $iPhone || $iPad) {
            echo 'We are redirecting you to the iOS app';
            return redirect('https://apps.apple.com/app/sibro-sell-from-home/id6444813730');
        } else {
            echo 'We are redirecting you to the web site';
            return redirect('https://sibro.ng');
        }
    }
}
