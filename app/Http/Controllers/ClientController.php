<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    function getAll()
    {
        $clients = Client::all();
        return view("clients", compact("clients"));
    }
    function getOne()
    {

    }

    function updateOne()
    {

    }

    function createOne()
    {

    }

    function deleteOne()
    {
    }
}
