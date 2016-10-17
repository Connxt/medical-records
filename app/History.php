<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public function doctor() {
		return $this->belongsTo("App\Doctor");
	}

	public function patient() {
		return $this->belongsTo("App\Patient");
	}

	public function historyType() {
		return $this->belongsTo("App\HistoryType");
	}
}
