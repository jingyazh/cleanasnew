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
            $table->string('home_meta_title');
            $table->string('home_meta_description');
            $table->string('comparison_meta_title');
            $table->string('comparison_meta_description');
            $table->string('clean_meta_title');
            $table->string('clean_meta_description');
            $table->string('service_meta_title');
            $table->string('service_meta_description');
            $table->string('todos_meta_title');
            $table->string('todos_meta_description');
            $table->string('values_meta_title');
            $table->string('values_meta_description');
            $table->string('faq_meta_title');
            $table->string('faq_meta_description');
            $table->string('testimonials_meta_title');
            $table->string('testimonials_meta_description');
            $table->string('aboutus_meta_title');
            $table->string('aboutus_meta_description');
            $table->string('contact_meta_title');
            $table->string('contact_meta_description');
            $table->longText('errorpage404');
            $table->longText('errorpage410');
            $table->longText('errorpage500');
            $table->longText('privacy');
            $table->longText('terms');
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
