<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master')->insert([
            [
                'full_name' => 'Парихмархова Наталья Алексеевна',
                'location_work' => 'На дому',
                'phone' => '+7 (900) 000 00-01',
                'social_link' => 'http://inst.ru/123',
                'type_procedure_id' => '1',
            ],
            [
                'full_name' => 'Стрижкова Елена Ивановна',
                'location_work' => 'В салоне',
                'phone' => '+7 (900) 000 00-02',
                'social_link' => 'http://inst.ru/321',
                'type_procedure_id' => '1',
            ],
        ]);
    }
}
