<?php

namespace App\Http\Controllers;

use App\Models\Bus_Type;
use Illuminate\Http\Request;

class Bus_TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bus_type = Bus_Type::get();
        return $bus_type;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $bus_type = new Bus_Type();
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
        $bus_type = Bus_Type::find($id);
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
        $bus_type= Bus_Type::find($id);
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
        $bus_type=Bus_Type::find($id);
        $bus_type->delete();
    }
}
