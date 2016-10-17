<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HistoryTypeController extends Controller
{
    public function index() {
    	$historyTypes = \App\HistoryType::all();

    	return $historyTypes;
    }

    public function get($id) {
    	$historyType = \App\HistoryType::findOrFail($id);

    	return $historyType;
    }
}
