<?php

namespace App\Http;

use App\Http\Controllers\Controller;

class NameController extends Controller
{

    public function geTname()
    {
        return response()->json(['name' => 'aibek']);
    }
}
