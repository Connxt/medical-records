<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function histories() {
		return $this->hasMany("App\History");
	}
}
