<?php

namespace Database\Seeders;

use App\Models\Overtime;
use App\Models\Reference;
use App\Models\Setting;
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
        // \App\Models\User::factory(10)->create();

        $references = [
            [
                'code' => 'overtime_method',
                'name' => 'Salary / 173',
                'expression' => '(salary / 173) * overtime_duration_total',
            ],

            [
                'code' => 'overtime_method',
                'name' => 'Fixed',
                'expression' => '10000 * overtime_duration_total',
            ],
        ];

        $setting = [
            'key' => 'overtime_method',
            'value' => '1',
        ];

        Reference::insert($references);
        Setting::create($setting);

        Overtime::factory(10)->create();
    }
}
