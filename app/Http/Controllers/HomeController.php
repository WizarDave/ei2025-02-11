<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $checkout = $request->user()->checkout('pri_01ht4q7xjjbgmeyxr7sgkmzkmt')
            ->returnTo(route('dashboard'));

        return view('home', ['checkout' => $checkout]);
    }
}
