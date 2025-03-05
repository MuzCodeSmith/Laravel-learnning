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
    
}
