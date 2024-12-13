<?php

namespace App\Http\Controllers;

use App\Models\Tape;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TapeFormController extends Controller
{
    function show() {
        return view('tapeform');
    }

    function handle_tape(Request $request) {
        $dir = $request->file('tape')->storeAs('tapes', Str::random(15) . '_' . $request->file('tape')->getClientOriginalName());
        Storage::disk('public')->put($dir ,Storage::get($dir));
        $tape = new Tape();
        $tape->username = Auth::user()["name"];
        $tape->filename = $request->file('tape')->getClientOriginalName();
        $tape->file = $dir;
        $tape->date = date('d/M/Y');
        $tape->save();
        return redirect('/app');
    }
}
