<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryType extends Model
{
    public function histories() {
		return $this->hasMany("App\History");
	}
}
