<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Almacen;
use App\Models\Corte;
use App\Models\Fumigada;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(7)->create();
        User::factory()->create([
            'name' => 'Carlos Valdespino',
            'email' => 'jeni@admin.com',
        ]);
        User::factory()->create([
            'name' => 'Alex Rodriguez',
            'email' => 'anita@admin.com',
        ]);
        User::factory()->create([
            'name' => 'Marco Marin',
            'email' => 'mau@admin.com',
        ]);

        Almacen::factory(100)->create();
        Corte::factory(200)->create();
        Fumigada::factory(50)->create();
    }
}
