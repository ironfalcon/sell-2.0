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
        //random token generator
        function generateRandomString() {
          $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $charactersLength = strlen($characters);
          $randomString = '';
          for ($i = 0; $i < 10; $i++) {
              $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
          }

        //update order
        $order = Order::find($id);
        $order->update($request->only('order_state', 'product_id'));

        $order->client()->update($request->only('name', 'surname',
          'old', 'country', 'region', 'address', 'email', 'instagram',
          'skype', 'facebook'));

          if($request->token_created == 'create'){
            $order->token = generateRandomString();
            $order->save();
          }

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
