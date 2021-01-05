<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->longText('embed');
            $table->string('is_visible');
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
        Schema::dropIfExists('extra_pages');
    }
}
