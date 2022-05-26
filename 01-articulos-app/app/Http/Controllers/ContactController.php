<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class ContactController extends Controller
{
     /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
       return view('plt.contact');
    }
}
