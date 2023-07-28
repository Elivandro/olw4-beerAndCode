<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Address;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients.index');
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(StoreClientRequest $request)
    {
        DB::transaction(function () use ($request){
            $user = User::create([
                'email' => $request->get('email'),
                'name' => $request->get('name'),
                'password' => Hash::make($request->get('password'))
            ]);

            $user->client()->create([
                'address_id' => $request->get('address_id'),
            ]);

        });

        return redirect()->route('clients.index')->with("Cliente cadastrado com sucesso!!");
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        DB::transaction(function () use ($request, $client) {
            $client->user->update([
                'email' => $request->get('email'),
                'name' => $request->get('name')
            ]);

            $client->update([
                'address_id' => $request->get('address_id'),
            ]);

            return redirect()->route('clients.index')->with("Cliente atualizado com sucesso!");
            
        });
    }

    public function destroy(Client $client)
    {
        dd($client);
    }
}
