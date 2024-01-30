<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view("portfolios.index", compact("portfolios"));
=======

    public function index()
    {
        $portfolio = Portfolio::all();
        return view('portfolios.index', compact("portfolio"));
>>>>>>> 5c086d578443f5f39767b1bd51f6390c55bf9375
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
