<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CryptocurrencyController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cryptocurrency_development(){
        return view('front.cryptocurrency.cryptocurrency_development');
    }

    public function ico_development(){
        return view('front.cryptocurrency.ico_development');
    }
    public function ieo_development(){
        return view('front.cryptocurrency.ieo_development');
    }

    public function crypto_ico_marketing_agency(){
        return view('front.cryptocurrency.crypto_ico_marketing_agency');
    }

    public function dapp_development(){
        return view('front.cryptocurrency.dapp_development');
    }

    public function smart_contract_development(){
        return view('front.cryptocurrency.smart_contract_development');
    }

    public function smart_contract_mlm(){
        return view('front.cryptocurrency.smart_contract_mlm');
    }
    public function token_development(){
        return view('front.cryptocurrency.token_development');
    }

    public function white_paper_development(){
        return view('front.cryptocurrency.white_paper_development');
    }
}
