<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;
use App\Models\Item;
use App\Models\Shipment;
use Illuminate\Support\Facades\Auth;

class ReceiptsController extends Controller
{
    public function index()
    {
        $receipts = Receipt::all();
        return view('receipts.index', ['receipts' => $receipts]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'totalPrice' => 'required|numeric',
            'date' => 'required|date',
            'productID' => 'required|exists:products,id', // Asegura que el producto existe
            'quantity' => 'required|integer|min:1',
            'addressID' => 'required|exists:addresses,id', // Asegura que la dirección existe
            'recipientName' => 'required|string|max:255',
        ]);

        // Crear el recibo
        $receipt = new Receipt();
        $receipt->totalPrice = $request->totalPrice;
        $receipt->date = $request->date;
        $receipt->save();

        // Crear el ítem asociado
        $item = new Item();
        $item->productID = $request->productID;
        $item->receiptID = $receipt->id; // Usamos el ID del recibo recién creado
        $item->quantity = $request->quantity;
        $item->save();

        // Crear el envío asociado
        $shipment = new Shipment();
        $shipment->userID = Auth::id(); // Usuario autenticado
        $shipment->addressID = $request->addressID;
        $shipment->receiptID = $receipt->id; // Usamos el ID del recibo
        $shipment->departureDate = now()->addDays(2); // Valor por defecto
        $shipment->deliveryDate = now()->addDays(15); // Valor por defecto
        $shipment->status = 'En proceso'; // Valor por defecto
        $shipment->cost = 9.99; // Valor por defecto
        $shipment->recipientName = $request->recipientName;
        $shipment->save();

        // Redirigir al índice de ítems o a donde prefieras
        return redirect()->route('iniciologin')->with('success', 'Compra, ítem y envío creados exitosamente.');
    }
}



