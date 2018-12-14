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
        $orders = Order::all();
        return view('orders.index', ['orders' => $orders]);
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
        $client->skype = $request->skype;
        $client->instagram = $request->instagram;
        $client->facebook = $request->facebook;
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
        $order = Order::find($id);
        dd($order);
        return view('orders.show', ['order' => $order ]);
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
        $order = Order::find($id);

          $order->client->name = $request->name;
          $order->client->surname = $request->surname;
          $order->client->old = $request->old;
          $order->client->country = $request->country;
          $order->client->region = $request->region;
          $order->client->address = $request->addres;
          $order->client->email = $request->email;
          $order->client->instagram = $request->instagram;
          $order->client->skype = $request->skype;
          $order->client->facebook = $request->facebook;
          $order->order_state = $request->status;
          $order->product_id = $request->product_id;
          if($request->token_created == 'create'){
            $order->token = "hyeyruedijihsiw";
          }
          $order->save();

        return redirect()->route('order.index');
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
