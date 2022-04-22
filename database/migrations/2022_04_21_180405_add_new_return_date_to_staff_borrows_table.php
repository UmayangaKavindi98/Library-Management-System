<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewReturnDateToStaffBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staff_borrows', function (Blueprint $table) {
            $table->date('New_Return_Date')->after('Return_Date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staff_borrows', function (Blueprint $table) {
            $table->dropColumn('New_Return_Date');
        });
    }
}
