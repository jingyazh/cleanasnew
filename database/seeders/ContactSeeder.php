<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'offsite_cleaning_facility_address' => '1303 Thompson Park Drive',
            'offsite_cleaning_facility_town' => 'Baytown, Texas 77521 USA',
            'offsite_cleaning_facility_tel' => '+1.832.271.2666',
            'offsite_cleaning_facility_email' => 'info@cleanasnew.com',
            'offices_address' => '6314 Hgwy 73',
            'offcies_town' => 'Geismar, Louisiana 70734 USA',
            'offcies_tel' => '+1.225.407.0666',
            'offcies_email' => 'info@cleanasnew.com',
            'embed' => '<div class="card-body padding15">
            <h5 class="card-title"> Interested?</h5>
            <p class="card-text">Seeing is Believing. Contact us to find out more about our services and how we can bring incredible value. We want to earn your business! All <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> service is provided with a guaranteed, up-front, fixed price. </p>
            <h5 class="card-title">Industry Cleaning Request Form</h5>
            <p class="card-text">The Industrial Cleaning Request form below can be used to request a quote by completing and returning to <a href="mailto:info@cleanasnew.com">info@cleanasnew.com</a>.<br>
              <i class="fa fa-file-pdf-o" style="color:red"></i><a target="_blank" href="https://cleanasnew.com/pdf/industrial-cleaning-requests-form.pdf"> Industrial Cleaning Request Form</a></p>
            <h5 class="card-title">Virtual Tour</h5>
            <p class="card-text">We invite you to an online Lunch and Learn meeting, with a Virtual Tour of our Baytown facility – Lunch is on Us!* Call or email us today to book your virtual tour. <small style="color:#666; margin:0; display:block">(*we’ll happily send lunch to you!)</small> <br>
            </p>
          </div>',
            'locale' => 'en',
        ]);
    }
}
