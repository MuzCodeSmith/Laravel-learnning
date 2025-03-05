<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    function getClients(){
        $clientData = Client::get();
        return view('clients-table',['clientData'=>$clientData]);
    }
    
    function addClients(Request $request){
        $client = new Client;
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->company = $request->company;
        $client->country = $request->country;
        $client->save();
        if($client){
            echo "data saved successfully!";
        }else{
            echo "something went wrong while creating client";

        }
        // return view('add-client');
    }

    function deleteClient($id){
        $client = Client::find($id)->delete();
        if($client){
            return redirect('/clients');
        }else{
            return "something went wrong while deleting user";
        }
    }

}
