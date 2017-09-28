<?php

use Illuminate\Database\Seeder;

class EspecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('especialities')->insert([
          'name' => 'Nutrição',
      ]);
    }
}
