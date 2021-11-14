<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('type_procedure')->insert([
          ['name' => 'Солярий'],
          ['name' => 'Пилинг'],
          ['name' => 'Миникюр'],
          ['name' => 'Педикюр'],
          ['name' => 'Массаж']
      ]);
    }
}
