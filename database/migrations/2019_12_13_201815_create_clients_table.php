<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('mac')->unique();                        
            
            $table->string('fname');
            $table->string('lname');

            $table->string('addr1');
            $table->string('addr2')->nullable();

            $table->string('comname')->nullable();

            $table->string('email')->nullable();

            
            $table->string('city');
            $table->string('province');
            $table->string('phone');

            $table->string('zipcode');

            $table->boolean('is_disabled')->default(false);

            $table->timestamps(); 

            $table->unsignedBigInteger('resellerid')->nullable();
            
            $table->foreign('resellerid')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('subscripttypeid')->references('id')->on('subscripttypes')->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
