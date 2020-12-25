<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('offsite_cleaning_facility_address');
            $table->string('offsite_cleaning_facility_town');
            $table->string('offsite_cleaning_facility_tel');
            $table->string('offsite_cleaning_facility_email');
            $table->string('offices_address');
            $table->string('offices_town');
            $table->string('offices_tel');
            $table->string('offices_email');
            $table->longText('embed');
            $table->string('locale');
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
        Schema::dropIfExists('contacts');
    }
}
