<?php

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

      DB::table('movies')->insert([
        'title' => 'Avatar',
        'Release_Year' => '2009',
        'id' => '1',
        'created_at' => NOW(),
        'updated_at' => NOW(),
      ]);
      DB::table('movies')->insert(
    ['title' => 'Titanic',
    'Release_Year' => '1997',
    'id' => '2',
    'created_at' => NOW(),
    'updated_at' => NOW(),
  ]);
  DB::table('movies')->insert(
  ['title' => 'Star Wars: The Force Awakens',
  'Release_Year' => '2015',
  'id' => '3',
  'created_at' => NOW(),
  'updated_at' => NOW(),
  ]);
  DB::table('movies')->insert(
  ['title' => 'Jurassic World',
  'Release_Year' => '2015',
  'id' => '4',
  'created_at' => NOW(),
  'updated_at' => NOW(),
]);
DB::table('movies')->insert(
  ['title' => 'The Avengers',
  'Release_Year' => '2012',
  'id' => '5',
  'created_at' => NOW(),
  'updated_at' => NOW(),
  ]);
        // $this->call(UsersTableSeeder::class);
    }
}
