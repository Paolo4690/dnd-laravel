<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function index()
    {
        $data = [];

        return view('show', compact('data'));
    }

    //
    //


}
