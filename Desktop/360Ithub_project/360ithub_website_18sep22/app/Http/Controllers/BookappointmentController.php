<?php

namespace App\Http\Controllers;

use App\Models\Bookappointment;
use Illuminate\Http\Request;

class BookappointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.calendly');
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
     * @param  \App\Models\Bookappointment  $bookappointment
     * @return \Illuminate\Http\Response
     */
    public function show(Bookappointment $bookappointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookappointment  $bookappointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookappointment $bookappointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookappointment  $bookappointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookappointment $bookappointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookappointment  $bookappointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookappointment $bookappointment)
    {
        //
    }
}
