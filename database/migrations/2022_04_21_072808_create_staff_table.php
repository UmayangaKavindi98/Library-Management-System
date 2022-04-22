<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id('Staff_Id');
            $table->String('First_Name', 100);
            $table->String('Last_Name', 100);
            $table->String('Gender', 6);
            $table->date('DOB');
            $table->String('Address', 100);
            $table->integer('TeleNum');
            $table->String('Email');
            $table->String('Password');
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
        Schema::dropIfExists('staff');
    }
}
