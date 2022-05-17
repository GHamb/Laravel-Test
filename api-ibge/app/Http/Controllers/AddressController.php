<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\address;

class AddressController extends Controller
{
    
    public function index()
    {
        $addres = address::all();
        return json([$addres])
    }

    public function store()cli_set_process_title
    {
        $address = address::create([
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'bairro'=> $request->bairro,
            'id_cidade'=>$request->id_cidade
        ]);
    }

    public function update(Request $request, address $address)
    {
        $address['logradouro'] = $request->logradouro;
        $address['numero'] = $request->numero;
        $address['bairro'] = $request->bairro;

        $address->save();
    
    }

    public function destroy(Post $address)
    {
        $address->delete();
    }
}
