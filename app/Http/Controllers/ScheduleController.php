<?php

namespace App\Http\Controllers;

use App\Models\BusType;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Schedule::paginate(10);
        return view('schedule', compact('data') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $schedule = new Schedule();
        $schedule->no_pol = $request->no_pol;
        $schedule->bus_code = $request->bus_code;
        $schedule->busType_id= $request->busType_id;
        $schedule->initial_route =$request->initial_route;
        $schedule->destination_route = $request->destination_route;
        $schedule->departure_time =$request->departure_time;
        $schedule->arrival_time =$request->arrival_time;
        $schedule->seat_total =$request->seat_total;
        $schedule->seat_available = $request->seat_available;
        $schedule->save();
        return $schedule;
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
        $schedule = Schedule::find($id);
        return $schedule;
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
        $schedule= Schedule::find($id);
        if (isset($request->no_pol)) $schedule->no_pul = $request->no_pul;
        if (isset($request->bus_code)) $schedule->bus_code = $request->bus_code;
        if (isset($request->bus_id_type)) $schedule->bus_id_type = $request->bus_id_type;
        if (isset($request->initial_route)) $schedule->initial_route = $request->initial_route;
        if (isset($request->destination_route)) $schedule->destination_route = $request->destination_route;
        if (isset($request->departure_time)) $schedule->departure_time = $request->departure_time;
        if (isset($request->arrival_time)) $schedule->arrival_time = $request->arrival_time;
        if (isset($request->seat_total)) $schedule->seat_total = $request->seat_total;
        if (isset($request->seat_available)) $schedule->seat_available = $request->seat_available;
        $schedule->save();
        return $schedule;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule=Schedule::find($id);
        $schedule->delete();
    }
}
