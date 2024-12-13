<?php

namespace App\Http\Controllers;

use App\Models\Tape;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TapeController extends Controller
{
    function getTape($id) {
        return Storage::download(Tape::where('id', $id)->first()->file);
    }
}
