<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Event $event) {
        return view('admin.show', ['event' => $event]);        

    }
}
