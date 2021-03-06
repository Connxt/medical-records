<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("patients", function (Blueprint $table) {
            $table->increments("id");
            $table->string("username")->unique();
            $table->string("password");
            $table->string("last_name");
            $table->string("first_name");
            $table->string("middle_name");
            $table->date("date_of_birth");
            $table->string("gender");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("patients");
    }
}
