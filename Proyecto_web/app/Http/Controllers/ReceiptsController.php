<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;
use App\Models\Item;

class ReceiptsController extends Controller
{
    public function index()
    {
        $receipts = Receipt::all();
        return view('receipts.index', ['receipts' => $receipts]);
    }

    public function create()
    {
        return view(''); // Si no tienes una vista de creación, puedes eliminar este método.
    }

    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'totalPrice' => 'required|numeric',
            'date' => 'required|date',
            'productID' => 'required|exists:products,id', // Asegura que el producto existe
            'quantity' => 'required|integer|min:1'
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

        // Redirigir al índice de items o a donde prefieras
        return redirect()->route('iniciologin')->with('success', 'Compra y ítem creados exitosamente.');
    }
}


