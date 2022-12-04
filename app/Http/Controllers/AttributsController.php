<?php

namespace App\Http\Controllers;

use App\Models\Attributs;
use App\Http\Requests\StoreAttributsRequest;
use App\Http\Requests\UpdateAttributsRequest;

class AttributsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreAttributsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttributsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attributs  $attributs
     * @return \Illuminate\Http\Response
     */
    public function show(Attributs $attributs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attributs  $attributs
     * @return \Illuminate\Http\Response
     */
    public function edit(Attributs $attributs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttributsRequest  $request
     * @param  \App\Models\Attributs  $attributs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttributsRequest $request, Attributs $attributs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attributs  $attributs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attributs $attributs)
    {
        //
    }
}
