<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\Log;

class LogController extends Controller
{
    //
    public function index() {

        $result = new Response();
        $result->setContent(view('logs', ['logs' => Log::all()]));
        return $result;

    }
}
