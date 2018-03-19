<?php

namespace App\Http\Controllers;

use App\budgetOverview;
use Illuminate\Http\Request;

class BudgetOverviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('budgetteren.budgetOverview');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\budgetOverview  $budgetOverview
     * @return \Illuminate\Http\Response
     */
    public function show(budgetOverview $budgetOverview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\budgetOverview  $budgetOverview
     * @return \Illuminate\Http\Response
     */
    public function edit(budgetOverview $budgetOverview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\budgetOverview  $budgetOverview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, budgetOverview $budgetOverview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\budgetOverview  $budgetOverview
     * @return \Illuminate\Http\Response
     */
    public function destroy(budgetOverview $budgetOverview)
    {
        //
    }
}
