<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            // $table->string('username');
            $table->string('fname');
            $table->string('lname');

            $table->string('email')->unique()->nullable();

            $table->integer('roleno');
            $table->unsignedBigInteger('parentno')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->boolean('is_disabled')->default(false);

            $table->string('lastip')->nullable();
            $table->timestamp('lastlogintime')->nullable();

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('parentno')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('users');
    }
}
