<?php

use Illuminate\Database\Seeder;
use App\Especialitie;

class EspecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $especialities = [
          ['name' => ' '],
          ['name' => 'Fisioterapia'],
          ['name' => 'Estética'],
          ['name' => 'Psicologia'],
          ['name' => 'Nutrição'],
      ];
      foreach ($especialities as $key => $value) {
        Especialitie::create($value);
      }
    }
}
