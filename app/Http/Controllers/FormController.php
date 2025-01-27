<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function handleForm(Request $request)
    {
        $data = $request->all();
        return redirect()->route('display')->with('data', $data);
    }

    public function displayData()
    {
        $data = session('data');
        return view('display', compact('data'));
    }
}
