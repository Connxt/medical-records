<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public function doctor() {
		return $this->hasOne("App\Doctor");
	}

	public function patient() {
		return $this->hasOne("App\Patient");
	}

	public function historyType() {
		return $this->hasOne("App\HistoryType");
	}
}
