<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cities =[
          [
          'state_id' => 1,
          'name' => 'Pinhão',
          ],
          [
          'state_id' => 1,
          'name' => 'Guarapuava',
          ],
          [
          'state_id' => 1,
          'name' => 'Bituruna',
          ],
          [
          'state_id' => 1,
          'name' => 'Reserva do Iguaçu',
          ],
          [
          'state_id' => 1,
          'name' => 'Cruz Machado',
          ],
          [
          'state_id' => 1,
          'name' => 'Candói',
          ],
          [
          'state_id' => 8,
          'name' => 'Porto União',
          ],
          [
          'state_id' => 8,
          'name' => 'Joinvile',
          ],
        ];
        foreach ($cities as $key => $value) {
          City::create($value);
        }
    }
}
