<?php

use Illuminate\Database\Seeder;

class TypeProceduresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('type_procedures')->insert([
          'name' => 'Massagem',
          ]);
    }
}
