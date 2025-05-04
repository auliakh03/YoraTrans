<?php

namespace App\Http\Controllers;

use App\Models\CustomerData;
use Illuminate\Http\Request;

class CustomerDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CustomerData::paginate(10);
        return view('customer_data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $customer_data = new CustomerData();
        $customer_data->id_customer = $request->customer_id;
        $customer_data->full_name = $request->full_name;
        $customer_data->email = $request->email;
        $customer_data->phone_number = $request->phone_number;
        $customer_data->address = $request->address;
        $customer_data->save();
        return $customer_data;
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
        $customer_data = CustomerData::find($id);
        return $customer_data;
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
        $customer_data= CustomerData::find($id);
        isset($request->id_customer) && $customer_data->id_customer = $request->id_customer;
        isset($request->full_name) && $customer_data->full_name = $request->full_name;
        isset($request->email) && $customer_data->email = $request->email;
        isset($request->phone_number) && $customer_data->phone_number = $request->phone_number;
        isset($request->address) && $customer_data->address = $request->address;
        $customer_data->save();
        return $customer_data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer_data=CustomerData::find($id);
        $customer_data->delete();
    }
}
 