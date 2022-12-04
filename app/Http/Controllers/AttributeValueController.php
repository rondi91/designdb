<?php

namespace App\Http\Controllers;

use App\Models\Attribute_value;
use App\Http\Requests\StoreAttribute_valueRequest;
use App\Http\Requests\UpdateAttribute_valueRequest;

class AttributeValueController extends Controller
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
     * @param  \App\Http\Requests\StoreAttribute_valueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttribute_valueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function show(Attribute_value $attribute_value)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribute_value $attribute_value)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttribute_valueRequest  $request
     * @param  \App\Models\Attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttribute_valueRequest $request, Attribute_value $attribute_value)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribute_value  $attribute_value
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute_value $attribute_value)
    {
        //
    }
}
