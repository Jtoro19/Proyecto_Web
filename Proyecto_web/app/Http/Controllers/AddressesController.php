<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressesController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        return view('addresses.index', ['addresses' => $addresses]);
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $address = new Address();
        $address->userID = $request->userID;
        $address->addressName = $request->addressName;
        $address->information = $request->information;
        $address->save();
        return redirect()->route('addresses.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $address = Address::find($id);
        return view('addresses.edit', ['address' => $address]);
    }

    public function update(Request $request, $id)
    {
        $address = Address::find($id);
        //$address->userID = $request->userID;
        $address->addressName = $request->addressName;
        $address->information = $request->information;
        $address->save();
        return redirect()->route('addresses.index');
    }

    public function destroy($id)
    {
        $address = Address::find($id);
        $address->delete();
        return redirect()->route('');
    }
}
