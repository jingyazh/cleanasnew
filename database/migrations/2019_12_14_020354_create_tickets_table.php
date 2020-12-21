<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');        
            
            $table->unsignedBigInteger('status')->default(0);

            $table->unsignedBigInteger('clientno')->nullable();
            $table->unsignedBigInteger('serviceno')->nullable();
            $table->unsignedBigInteger('transferno')->default(0);
            $table->unsignedBigInteger('requestno')->nullable();

            $table->string('transother')->nullable();

            $table->unsignedBigInteger('speedno')->nullable();
            $table->unsignedBigInteger('modemno')->nullable();
            $table->string('sn')->nullable();
            $table->string('macaddr')->unique();
            $table->string('installon')->nullable();

            $table->string('clientvl')->nullable();
            $table->string('availtimes')->nullable();
            
            $table->unsignedBigInteger('planphoneno')->nullable();
            $table->unsignedBigInteger('iskeepno')->nullable();

            $table->string('keep_phoneno')->nullable();
            
            $table->string('keep_fname')->nullable();
            $table->string('keep_lname')->nullable();
            $table->string('keep_address')->nullable();
            $table->string('keep_oldprovider')->nullable();

            $table->string('installdate')->nullable();

            $table->string('usernamesip')->nullable();
            $table->string('passwd')->nullable();
            $table->string('comment')->nullable();          
            
            $table->string('oldaddr')->nullable();
            $table->string('newaddr')->nullable();


            $table->timestamps();

            $table->unsignedBigInteger('resellerid')->nullable();            
            $table->foreign('resellerid')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('clientno')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
