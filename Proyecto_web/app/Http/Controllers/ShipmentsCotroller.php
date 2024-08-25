<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;

class ShipmentsCotroller extends Controller
{

    public function index()
    {
        $shipments = Shipment::all();
        return view('shipments.index', ['shipments' => $shipments]);
    }


    public function create()
    {
        return view('');
    }


    public function store(Request $request)
    {
        $shipment = new Shipment();
        $shipment->userID = $request->userID;
        $shipment->addressID = $request->addressID;
        $shipment->receiptID = $request->receiptID;
        $shipment->departureDate = $request->departureDate;
        $shipment->deliveryDate = $request->deliveryDate;
        $shipment->status = $request->status;
        $shipment->cost = $request->cost;
        $shipment->recipientName = $request->recipientName;
        $shipment->save();
        return redirect()->route('shipments.index');
    }

    public function show($id)
    {
        //
    }

}
