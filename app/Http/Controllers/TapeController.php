<?php

namespace App\Http\Controllers;

use App\Models\Tape;
use Illuminate\Support\Facades\Storage;

class TapeController extends Controller
{
    function getTape($id) {
        $tape = Tape::where('id', $id)->first();
        return response(Storage::get($tape->file))->header('Content-Disposition', 'attachment; filename="' . $tape->filename . '"');
    }
}
