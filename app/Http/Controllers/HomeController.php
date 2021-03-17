<?php

namespace App\Http\Controllers;

use App\Models\CurrencyConverter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_converted = CurrencyConverter::get()->sum('converted_to_usd');
        $count_request = count(CurrencyConverter::get());
        $max_converted = CurrencyConverter::groupBy('to')->orderByRaw('COUNT(*) DESC')->limit(1)->pluck('to')->first();
        return view('dashboard', compact('total_converted', 'count_request', 'max_converted'));
    }
}
