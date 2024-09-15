<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;

class ReceiptsCotroller extends Controller
{

    public function index()
    {
        $receipts = Receipt::all();
        return view('receipts.index', ['receipts' => $receipts]);
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $receipt = new Receipt();
        $receipt->totalPrice = $request->totalPrice;
        $receipt->date = $request->date;
        $receipt->save();
        return redirect()->route('iniciologin');
    }

}
