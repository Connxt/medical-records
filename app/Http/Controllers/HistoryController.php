<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HistoryController extends Controller
{
    public function index() {
    	$histories = \App\History::all();

    	foreach($histories as $history) {
    		$history->doctor;
    		$history->patient;
    		$history->historyType;
    	}

    	return $histories;
    }

    public function get($id) {
    	$history = \App\History::findOrFail($id);
    	$history->doctor;
    	$history->patient;
    	$history->historyType;

    	return $history;
    }
}
