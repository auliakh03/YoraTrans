<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Reservation::paginate(10);
        return view('reservation', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $reservation = new Reservation();
        $reservation->user_id = $request->user_id;
        $reservation->id_schedule = $request->id_schedule;
        $reservation->number_of_seats = $request->number_of_seats;
        $reservation->reservation_code = $request->reservation_code;
        $reservation->reservation_date = $request->reservation_date;
        $reservation->reservation_duration = $request->reservation_duration;
        $reservation->payment_date = $request->payment_date;
        $reservation->payment = $request->payment;
        $reservation->payment_status = $request->payment_status;
        $reservation->set_payment_method = $request->set_payment_method;
        $reservation->save();
        return $reservation;
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
        $reservation = Reservation::find($id);
        return $reservation;
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
        $reservation= Reservation::find($id);
        isset($request->user_id) && $reservation->user_id = $request->user_id;
        isset($request->schedule_id) && $reservation->schedule_id = $request->schedule_name;
        isset($request->number_of_seats) && $reservation->number_of_seats = $request->number_of_seats;
        isset($request->reservation_code) && $reservation->reservation_code = $request->reservation_code;
        isset($request->reservation_date) && $reservation->reservation_date = $request->reservation_date;
        isset($request->reservation_duration) && $reservation->reservation_duration = $request->reservation_duration;
        isset($request->payment_date) && $reservation->payment_date = $request->payment_date;
        isset($request->payment) && $reservation->payment = $request->payment;
        isset($request->payment_status) && $reservation->payment_status = $request->payment_status;
        isset($request->payment_methode) && $reservation->payment_method= $request->payment_method;
        $reservation->save();
        return $reservation;
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation=Reservation::find($id);
        $reservation->delete();
    }
}
