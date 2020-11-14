<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_loans = Auth::user()->client->loans()->get()->sum('amount');
        $total_payments = Auth::user()->client->payments()->get()->sum('amount');
        return view('dashboard',['total_loans'=>$total_loans,'total_payments'=>$total_payments ]);
    }
}
