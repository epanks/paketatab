<?php

namespace App\Http\Controllers;

use App\Paket_data;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Paket_data::paginate(10);
        //dd($data);
        return view('paket.index', compact('data'));
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
     * @param  \App\Paket_data  $paket_data
     * @return \Illuminate\Http\Response
     */
    public function show(Paket_data $paket_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paket_data  $paket_data
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket_data $paket_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paket_data  $paket_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket_data $paket_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paket_data  $paket_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket_data $paket_data)
    {
        //
    }
}
