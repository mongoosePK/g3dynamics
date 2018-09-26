<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSignupTablePast extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mammoth_signups', function (Blueprint $table) {
            $table->string('past_competitor');
            $table->integer('past_num_of_years');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mammoth_signups', function (Blueprint $table) {
            //
        });
    }
}
