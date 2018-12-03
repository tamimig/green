<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card; 

class CardsController extends Controller
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
        return view('card.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'card_holder_name' => 'required', 

        'card_number' => 'required', 

        'expiry_month' => 'required', 

        'expiry_year' => 'required', 

        'cvv' => 'required'

    ]); 

        $card = new Card(); 

        $card->card_holder_name = $request->card_holder_name; 

        $card->card_number = $request->card_number; 

        $card->expiry_month = $request->expiry_month; 

        $card->expiry_year = $request->expiry_year; 

        $card->cvv = $request->cvv; 

        $card->save(); 
        
       return redirect()->route('card.generate.create'); 
         
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
}
