<?php

use App\Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

          Date::truncate();

          $cantidadDatos = 1625;


          factory(Date::class, $cantidadDatos)->create();
    }
}
