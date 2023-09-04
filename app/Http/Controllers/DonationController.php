<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        return view('donations.donate');
    }
    public function store(Request $request)
    {
        // Handle the donation logic here
        // You can save the donation data to the database, send emails, etc.

        return redirect('/donate')->with('success', 'Thank you for your donation!');
    }
}
