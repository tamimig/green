<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bankgenerate; 
use App\Http\Requests;  
use App\Http\Resources\Bankgenerate as BankgenerateResource; 

class BankgeneratesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bankgenerate.index'); 
        
    }

    public function display()
    {
        return BankgenerateResource::collection(Bankgenerate::all()); 

    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bankgenerate.create'); 
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
        'amount' => 'required', 

        'merchant_id' => 'required', 

        'reference' => 'required' 

    ]);
         
         
        $bankgenerate= new Bankgenerate(); 

        $bankgenerate->amount = $request->amount; 
        $bankgenerate->merchant_id = $request->merchant_id; 

        $bankgenerate->reference = $request->reference; 

        $bankgenerate->save();

         return redirect()->route('home'); 
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
