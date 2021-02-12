<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nota;


class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nota::query()->delete();
        Nota::factory(10)->create();
    }
}
