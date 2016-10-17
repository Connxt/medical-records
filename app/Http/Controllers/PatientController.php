<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PatientController extends Controller
{
    public function index() {
    	return \App\Patient::all();
    }

    public function get($id) {
    	return \App\Patient::findOrFail($id);
    }
}
