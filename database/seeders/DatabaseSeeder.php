<?php

use Database\Seeders\AboutCompanySeeder;
use Database\Seeders\AboutUsSeeder;
use Database\Seeders\AdvisoryBoardSeeder;
use Database\Seeders\CleansSeeder;
use Database\Seeders\ComparisonsTableSeeder;
use Database\Seeders\ESGSeeder;
use Database\Seeders\FaqsSeeder;
use Database\Seeders\NewsEventsSeeder;
use Database\Seeders\OurValuesSeeder;
use Database\Seeders\PostsTableSeeder;
use Database\Seeders\ReviewsSeeder;
use Database\Seeders\ServicesSeeder;
use Database\Seeders\TestimonialsSeeder;
use Database\Seeders\ToDosSeeder;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(PostsTableSeeder::class);
        // $this->call(ComparisonsTableSeeder::class);
        // $this->call(CleansSeeder::class);
        // $this->call(ServicesSeeder::class);
        // $this->call(ToDosSeeder::class);
        // $this->call(OurValuesSeeder::class);
        // $this->call(FaqsSeeder::class);
        // $this->call(TestimonialsSeeder::class);
        // $this->call(ReviewsSeeder::class);
        // $this->call(ESGSeeder::class);
        $this->call(AboutUsSeeder::class);
        $this->call(AboutCompanySeeder::class);
        $this->call(AdvisoryBoardSeeder::class);
        $this->call(NewsEventsSeeder::class);
    }
}
