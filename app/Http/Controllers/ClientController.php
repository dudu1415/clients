<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Bill;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Client::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'id_number' => $request->id_number,
        ]);
        return response()->json($client);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
       return response()->json($client);
    }
    public function name($name){
        $name1 = Client::where('name',$name)->first();
        return response()->json($name1);
    }
    public function text($text){
        $texto = Client::where('name','like',"%$text%")->get();
        return response()->json($texto);
    }
    public function client($client){
        $bills = Bill::where('client_id','=',$client)->get();
        return response()->json($bills);
    }
    public function value($value){
        $contasAltas = Bill::where('value','>',$value)->get();
        return response()->json($contasAltas);
    }
    public function values($value1,$value2){
        $valores = Bill::where('value','>',$value1)->where('value','<',$value2)->get();
        return response()->json($valores);
    }
    public function order(){
        $clientNames = Client::orderBy('name','asc')->limit(2)->get();
        return response()->json($clientNames);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
