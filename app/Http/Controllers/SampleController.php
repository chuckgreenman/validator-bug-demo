<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function create()
    {
        return view('sample.create');
    }

    public function store(Request $request)
    {
        $requireAllFields = array_fill(1,3, 'required');

//        $requireAllFields = [
//            'one' => 'required',
//            'two' => 'required',
//            'three' => 'required'
//        ];

        $request->validate($requireAllFields);
    }
}
