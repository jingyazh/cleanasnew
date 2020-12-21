<?php

use Illuminate\Database\Seeder;

class SubscripttypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data_arr = [['id'=>1, 'name' => "1 MONTH", 'coden' => '1', 'duration' => '1', 'duration_in'=>'months']
            ,['id'=>2, 'name' => '3 MONTH', 'coden' => '3', 'duration' => '3', 'duration_in'=>'months']
            ,['id'=>3, 'name' => '6 MONTH', 'coden' => '6', 'duration' => '6', 'duration_in'=>'months']
        ];
            
        foreach ($data_arr as $data){
            App\Subscripttype::create($data);
        }
        
    }
}
