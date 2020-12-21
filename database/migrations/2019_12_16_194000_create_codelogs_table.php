<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodelogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codelogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('from_rsid')->nullable();
            $table->unsignedBigInteger('to_rsid')->nullable();
            $table->integer('addcoden')->default('0');
            $table->tinyInteger('acttype')->default('1');   //... action type 1: add_coden , type 2 ~ : suspend, active, change password etc
            $table->timestamps();

            $table->foreign('from_rsid')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('to_rsid')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codelogs');
    }
}
