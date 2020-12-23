<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->longText('home_embed');
            $table->longText('home_discounter');
            $table->string('home_esg_image');
            $table->string('comparison_image');
            $table->longText('comparison_txt');
            $table->longText('clean_slogan');
            $table->longText('service_image');
            $table->longText('service_txt');
            $table->string('service_list_image');
            $table->string('service_download_checklist');
            $table->longText('esg_banner_embed');
            $table->longText('footer_txt');
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
        Schema::dropIfExists('site_settings');
    }
}
