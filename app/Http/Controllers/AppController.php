<?php

namespace App\Http\Controllers;

use App\Models\Tape;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AppController extends Controller
{
    function show() {
        return view('_app', ['tapes' => Tape::all()]);
    }
}
