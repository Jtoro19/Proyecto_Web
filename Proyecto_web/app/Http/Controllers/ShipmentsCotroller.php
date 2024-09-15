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

        $today = now(); // Obtiene la fecha y hora actuales
        $shipment->departureDate = $request->departureDate ? $request->departureDate : $today->addDays(2);
        $shipment->deliveryDate = $request->deliveryDate ? $request->deliveryDate : $today->addDays(15);
        
        $shipment->status = 'En proceso';
        $shipment->cost = 9.99;
        $shipment->recipientName = $request->recipientName;
        $shipment->save();
        return redirect()->route('shipments.index');
    }

    public function show($id)
    {
        //
    }

}
