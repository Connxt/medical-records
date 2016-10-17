<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DoctorController extends Controller
{
    public function index() {
    	return \App\Doctor::all();
    }

    public function get($id) {
    	return \App\Doctor::findOrFail($id);
    }
}
