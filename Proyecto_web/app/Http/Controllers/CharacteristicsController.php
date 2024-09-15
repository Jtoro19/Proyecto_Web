<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Characteristic;

class CharacteristicsController extends Controller
{
    public function index()
    {
        $characteristics = Characteristic::all();
        return view('characteristics.index', ['characteristics' => $characteristics]);
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $characteristic = new Characteristic();
        $characteristic->productID = $request->productID;
        $characteristic->characteristicName = $request->characteristicName;
        $characteristic->save();
        return redirect()->route('characteristics.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $characteristic = Characteristic::find($id);
        return view('characteristics.edit', ['characteristic' => $characteristic]);
    }

    public function update(Request $request, $id)
    {
        $characteristic = Characteristic::find($id);
        //$characteristic->productID = $request->productID;
        $characteristic->characteristicName = $request->characteristicName;
        $characteristic->save();
        return redirect()->route('characteristics.index');
    }

    public function destroy($id)
    {
        $characteristic = Characteristic::find($id);
        $characteristic->delete();
        return redirect()->route('characteristics.index');
    }
}
