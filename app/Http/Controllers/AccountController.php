<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function index()
        {
        return view('Template.master');
    }
    public function table()
    {
        return view('template.table');
    }
    public function data()
    {
        return view('template.data-table');
    }
}
