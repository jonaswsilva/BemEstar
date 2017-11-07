<?php

use Illuminate\Database\Seeder;
use App\TypeProcedures;

class TypeProceduresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $type_procedure = [
          ['name' => 'Massagem'],
          ['name' => 'Depilação'],
          ];
          foreach ($type_procedure as $key => $value) {
            TypeProcedures::create($value);
          }
    }
}
