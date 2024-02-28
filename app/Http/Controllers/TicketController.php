<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Route;
use App\Models\Transporter;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        $routes = Route::all();
        $transporters = Transporter::all();
        return view('index',compact(['tickets','routes','transporters']));
    }
}
