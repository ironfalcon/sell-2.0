<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Client;
use Carbon\Carbon;
class OrderController extends Controller
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
        return view('orders.create');
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
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'old' => 'required|integer|between:10,110',
            'country' => 'required',
            'region' => 'required',
            'address' => 'required',
            'email' => 'required', ]);

        $client = new Client;
        $client->name = $request->name;
        $client->surname = $request->surname;
        $client->old = $request->old;
        $client->country = $request->country;
        $client->region = $request->region;
        $client->address = $request->address;
        $client->email = $request->email;
        // $client->create([
        //     'name' => $request->name,
        //     'surname' => $request->surname,
        //     'old' => $request->old,
        //     'country' => $request->country,
        //     'region' => $request->region,
        //     'address' => $request->address,
        //     'email' => $request->email,
        $client->created_at = Carbon::now('Europe/Samara');
        $client->updated_at = Carbon::now('Europe/Samara');
            // ]);
        $client->save();

        $order = new Order;
        $order->product_id = $request->product_id;
        $order->client_id = $client->id;
        $order->save();

        return redirect()->route('index');


    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
