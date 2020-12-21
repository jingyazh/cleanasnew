<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('reseller_id')->nullable();
            $table->unsignedBigInteger('clientno')->nullable();
            $table->unsignedBigInteger('ticketno')->nullable();
            $table->unsignedBigInteger('creqno')->nullable();
            
            $table->string('client_name')->nullable(); //... client can be deleted , so same client_name

            $table->tinyInteger('acttype')->default('1');   //... action type  = Statistic::ACTION_  const
            
            $table->string('actcontent')->nullable();
            

            $table->foreign('reseller_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            $table->foreign('clientno')->references('id')->on('clients')->onDelete('set null')->onUpdate('cascade'); //... log should be existed even though client is deleted
            $table->foreign('ticketno')->references('id')->on('tickets')->onDelete('set null')->onUpdate('cascade'); //... log should be existed even though client is deleted
            // $table->foreign('creqno')->references('id')->on('crequests')->onDelete('set null')->onUpdate('cascade'); //... log should be existed even though client is deleted
            

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
        Schema::dropIfExists('statistics');
    }
}
