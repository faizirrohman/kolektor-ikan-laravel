<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        //
    }
}
