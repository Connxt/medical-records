<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
	protected $hidden = ["password"];

    public function histories() {
		return $this->hasMany("App\History");
	}
}
