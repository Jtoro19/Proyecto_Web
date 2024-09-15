<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;
use Illuminate\Support\Facades\Auth;

class ShipmentsController extends Controller
{

    public function index()
    {
    // Obtiene los envíos del usuario autenticado
    $shipments = Shipment::where('userID', Auth::id())->get();
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
    // Obtiene el envío por ID y asegura que pertenezca al usuario autenticado
    $shipment = Shipment::where('id', $id)->where('userID', Auth::id())->firstOrFail();

    // Retorna la vista 'shipments.info' con los datos del envío
    return view('shipments.info', ['shipment' => $shipment]);
    }

}
