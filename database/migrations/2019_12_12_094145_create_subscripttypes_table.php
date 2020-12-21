<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscripttypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscripttypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('coden')->default(1);
            $table->integer('duration')->default(1);
            $table->string('duration_in')->default('months');
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
        Schema::dropIfExists('subscripttypes');
    }
}
