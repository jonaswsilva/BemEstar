<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $states = [
          ['name' => 'Paraná'],
          ['name' => 'Santa Catarina'],
          ];
          foreach ($states as $key => $value) {
            State::create($value);
          }
    }
}
