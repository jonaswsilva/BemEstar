<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


// $factory->define(App\Person::class, function (Faker\Generator $faker) {
//     return [
//       'name' => $faker->firstName($gender = null|'male'|'female'),
//       'lastname' => $faker->lastName,
//       'rg' => $faker->randomNumber($nbDigits = NULL, $strict = false),
//       'cpf' $faker->randomNumber($nbDigits = NULL, $strict = false),
//       'sex' $faker->cnp($gender: null (random), male, female),
//       'phone' => $faker->phoneNumber,
//       'landline' => $faker->phoneNumber,
//     ];
// });
//
// $factory->define(App\State::class, function (Faker\Generator $faker) {
//     return [
//       'name' => $faker->state,
//     ];
// });
//
// $factory->define(App\City::class, function (Faker\Generator $faker) {
//     return [
//       'name' => $faker->city,
//       'state_id' => 'factory:App\State',
//     ];
// });
//
//
// $factory->define(App\Address::class, function (Faker\Generator $faker) {
//     return [
//       'cep' => $faker->postcode,
//       'street' => $faker->streetName,
//       'number' => $faker->buildingNumber,
//       'neighborhood' => $faker->streetSuffix,
//       'city_id' => 'factory:App\City',
//     ];
// });
//

$factory->define(App\Patient::class, function (Faker\Generator $faker) {
    return [
        'father' => $faker->name,
      	'mother' => $faker->name,
      	'birth_date' => $faker->date,
      	'spouce' => $faker->name,
      	'person_id' => rand(1,20),
        'address_id' => rand(1,20)
    ];
});
