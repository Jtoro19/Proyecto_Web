<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemsCotroller extends Controller
{

    public function index()
    {
        $items = Item::all();
        return view('items.index', ['items' => $items]);
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $item = new Item();
        $item->productID = $request->productID;
        $item->receiptID = $request->receiptID;
        $item->quantity = $request->quantity;
        $item->save();
        return redirect()->route('items.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit', ['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        //$item->productID = $request->productID;
        //$item->receiptID = $request->receiptID;
        $item->quantity = $request->quantity;
        $item->save();
        return redirect()->route('items.index');
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect()->route('');
    }
}
