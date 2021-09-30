<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shipment;
use App\Models\Invoice;

class ShipmentController extends Controller
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
        // dd($request);

      $inputs[ "s_company"] = $request["s_company"];
      $inputs[ "s_name"] = $request["s_name"];
      $inputs[ "s_address"] = $request["s_address"];
      $inputs[ "s_country"] = $request["s_address"];
      $inputs[ "s_state"] = $request["s_state"];
      $inputs[ "s_city"] = $request["s_city"];
      $inputs[ "s_zipcode"] = $request["s_zipcode"];
      $inputs[ "s_nidorpp"] = $request["s_nidorpp"];
      $inputs[ "s_telephone"] = $request["s_telephone"];
      $inputs[ "s_mobile"] = $request["s_mobile"];
      $inputs[ "r_company"] = $request["r_company"];
      $inputs[ "r_name"] = $request["r_name"];
      $inputs[ "r_address"] = $request["r_address"];
      $inputs[ "r_country"] = $request["r_country"];
      $inputs[ "r_city"] = $request["r_city"];
      $inputs[ "r_zipcode"] = $request["r_zipcode"];
      $inputs[ "r_id"] = $request["r_id"];
      $inputs[ "r_mobile"] = $request["r_mobile"];
      $inputs[ "r_telephone"] = $request["r_telephone"];
      $inputs[ "cou_name"] = $request["cou_name"];
      $inputs[ "cou_number"] = $request["cou_number"];
      $inputs[ "cou_sample"] = $request["cou_sample"];
      $inputs[ "cou_height"] = $request["cou_height"];
      $inputs[ "cou_width"] = $request["cou_width"];
      $inputs[ "cou_length"] = $request["cou_length"];
      $inputs[ "v_weight"] = $request["v_weight"];
      $inputs[ "g_weight"] = $request["g_weight"];
      $inputs[ "prepaid_amount"] = $request["prepaid_amount"];
      $inputs[ "coll_amount"] = $request["coll_amount"];
      $inputs[ "booked_by"] = $request["booked_by"];
      $inputs[ "dateNtime"] = $request["dateNtime"];

      $shipment = new Shipment($inputs);
      $shipment->save();
      $array_size = count($request['description']);

       for($i=0; $i < $array_size; $i++){
        $invoice_inputs[ "description"] = $request["description"][$i];
        $invoice_inputs[ "quantity"] = $request["quantity"][$i];
        $invoice_inputs[ "price"] = $request["price"][$i];
        $invoice_inputs[ "tot_amount"] = $request["tot_amount"][$i];
        $shipment->invoices()->create($invoice_inputs);
       }

       return redirect()->back();

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
