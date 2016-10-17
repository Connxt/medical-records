<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $hidden = ["password"];

    public function histories() {
		return $this->hasMany("App\History");
	}
}
