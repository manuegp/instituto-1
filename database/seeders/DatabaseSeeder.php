<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Grupo;
use App\Models\Matricula;
use App\Models\Nota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	User::query()->delete();
    	Grupo::query()->delete();
    	Matricula::query()->delete();
        User::factory(10)->create();
        Grupo::factory(20)->create();
        Matricula::factory(15)->create();

        $user = User::factory()
            ->has(Grupo::factory()->count(3))
            ->create();

        $this->call([NotasTableSeeder::class]);
    }

}
