<?php

namespace App\Http\Controllers;

use App\Models\BusType;
use Illuminate\Http\Request;

class BusTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BusType::paginate(10);
        return view('bus_type', compact('data') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $bus_type = new BusType();
        $bus_type->type = $request->type;
        $bus_type->price = $request->price;
        $bus_type->facility= $request->facility;
        $bus_type->seat_capacity= $request->seat_capacity;
        $bus_type->save();
        return $bus_type;
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
        $bus_type = BusType::find($id);
        return $bus_type;
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
        $bus_type= BusType::find($id);
        if (isset($request->type)) $bus_type->type = $request->type;
        if (isset($request->price)) $bus_type->price = $request->price;
        if (isset($request->facility)) $bus_type->facility = $request->facility;
        if (isset($request->seat_capacity)) $bus_type->seat_capacity = $request->seat_capacity;
        $bus_type->save();
        return $bus_type;
        /*
        if (isset($request->type)) {
            $bus_type->type = $request->type;
        }

        if (isset($request->price)) {
            $bus_type->price = $request->price;
        }

        if (isset($request->facility)) {
            $bus_type->facility = $request->facility;
        }

        if (isset($request->seat_capacity)) {
            $bus_type->seat_capacity= $request->seat_capacity;
        }
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus_type=BusType::find($id);
        $bus_type->delete();
    }
}
