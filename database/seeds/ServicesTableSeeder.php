<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('services')->insert([

       ['name' => 'Bez przydzialu'],
       ['name' => 'Szczecin'],
       ['name' => 'SKM WWa'],

     ]);
    }
}