<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    public function create(Request $request) {
        $history = new \App\History;
        $history->patient_id = $request->input("patientId");
        $history->doctor_id = $request->input("doctorId");
        $history->history_type_id = $request->input("historyTypeId");
        $history->description = $request->input("description");
        $history->save();

        return $history;
    }
}
