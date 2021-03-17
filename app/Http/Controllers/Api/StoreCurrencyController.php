<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCurrencyRequest;
use App\Models\CurrencyConverter;
use Illuminate\Http\Request;

class StoreCurrencyController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurrencyRequest $request)
    {
        $data = $request->all();

        CurrencyConverter::create($data);

        return response()->json(['success' => 'Data Successfully Added']);
    }
}
