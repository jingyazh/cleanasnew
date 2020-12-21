<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crequests', function (Blueprint $table) {
            $table->bigIncrements('id');

            
            $table->unsignedBigInteger('status')->default(0);

            $table->string('ztext')->nullable();

            $table->string('masteranswer')->nullable();

            $table->timestamps();

            $table->unsignedBigInteger('resellerid')->nullable();            
            $table->foreign('resellerid')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('clientno')->nullable();            
            $table->foreign('clientno')->references('id')->on('clients')->onDelete('cascade');

            $table->unsignedBigInteger('ticketno')->nullable();
            $table->foreign('ticketno')->references('id')->on('tickets')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crequests');
    }
}
